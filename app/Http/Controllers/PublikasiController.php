<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Kategori;
use App\Models\Publikasi;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategoris = Kategori::where('jenis', 'publikasi')->get();
        $statuses = Status::all();

        $query = Publikasi::query();

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

        $totalPublikasi = (clone $query)->count();
        $totalDrafted = (clone $query)->where('status_id', 1)->count();
        $totalPublished = (clone $query)->where('status_id', 2)->count();

        $publikasis = $query->with(['kategori', 'cover_asset.media', 'doc_asset.media', 'status'])
            ->latest()
            ->paginate(5)
            ->withQueryString();

        // dd($publikasis);

        return view('cms.publikasi.index', compact(
            'publikasis',
            'kategoris',
            'statuses',
            'totalPublikasi',
            'totalDrafted',
            'totalPublished',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::where('jenis', 'publikasi')->get();
        $statuses = Status::all();

        return view('cms.publikasi.create', compact('kategoris', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'status_id' => 'required|integer|max:10',
            'kategori_id' => 'required|integer',
            'cover_id' => 'required|integer',
            'doc_id' => 'required|integer',
            'judul' => 'required|string|max:100',
            'edisi' => 'string|max:100',
            'volume' => 'string|max:100',
            'deskripsi' => 'required|string',
        ]);

        try {
            Publikasi::create([
                'status_id' => $validated['status_id'],
                'kategori_id' => $validated['kategori_id'],
                'cover_id' => $validated['cover_id'],
                'doc_id' => $validated['doc_id'],
                'judul' => $validated['judul'],
                'edisi' => $validated['edisi'],
                'volume' => $validated['volume'],
                'deskripsi' => $validated['deskripsi'],
            ]);

            return redirect()
                ->route('cms.publikasi.index')
                ->with('success', 'Data berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal menyimpan data!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Publikasi $publikasi)
    {
        $publikasi->load(['kategori', 'cover_asset.media', 'doc_asset.media', 'status']);

        return view('cms.publikasi.show', compact('publikasi'));
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
    public function destroy(string $id)
    {
        //
    }
}
