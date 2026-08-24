<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\MediaAsset;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategoris = Kategori::where('jenis', 'artikel')->get();
        $statuses = Status::all();

        $query = Artikel::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%");
            });
        }

        if ($request->filled('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        if ($request->filled('status_id')) {
            $query->where('status_id', $request->status_id);
        }

        $totalArtikel = (clone $query)->count();
        $totalDrafted = (clone $query)->where('status_id', 1)->count();
        $totalPublished = (clone $query)->where('status_id', 2)->count();

        $artikels = $query->with(['kategori', 'media_asset.media', 'status'])
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('cms.artikel.index', compact(
            'artikels',
            'totalArtikel',
            'totalDrafted',
            'totalPublished',
            'kategoris',
            'statuses',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $kategoris = Kategori::where('jenis', 'artikel')->get();
        $statuses = Status::all();


        $query = MediaAsset::with('media');
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('type')) {
            if ($request->type === 'image') {
                $query->whereHas('media', function ($q) {
                    $q->where('mime_type', 'like', 'image/%');
                });
            } elseif ($request->type === 'document') {
                $query->whereHas('media', function ($q) {
                    $q->where('mime_type', 'application/pdf');
                });
            } elseif ($request->type === 'video') {
                $query->whereHas('media', function ($q) {
                    $q->where('mime_type', 'like', 'video/%');
                });
            }
        }

        $mediaAssets = $query->paginate(5)->withQueryString();

        return view('cms.artikel.create', compact('kategoris', 'statuses', 'mediaAssets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'kategori_id' => 'required|integer',
            'media_id' => 'required|integer',
            'status_id' => 'required|integer|max:10',
            'judul' => 'required|string|max:100',
            // 'penulis' => 'required|string|max:100',
            'ringkasan' => 'required|string',
            'isi_artikel' => 'required|string',
        ]);

        try {
            // dd('success');
            Artikel::create([
                'kategori_id' => $validated['kategori_id'],
                'media_id' => $validated['media_id'],
                'status_id' => $validated['status_id'],
                'judul' => $validated['judul'],
                'penulis' => 'Admin Retorika',
                'ringkasan' => $validated['ringkasan'],
                'isi_artikel' => $validated['isi_artikel'],
            ]);

            return redirect()
                ->route('cms.artikel.index')
                ->with('success', 'Data berhasil dibuat!');
        } catch (\Exception $e) {
            // dd($e);
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal menyimpan data!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        try {
            $artikel->delete();

            return redirect()
                ->route('cms.artikel.index')
                ->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $th) {
            return redirect()
                ->back()
                ->with('error', 'Gagal menghapus data!');
        }
    }
}
