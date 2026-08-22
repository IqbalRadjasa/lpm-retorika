<?php

namespace App\Http\Controllers;

use App\Models\MediaAsset;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $totalMedia = MediaAsset::with('media')->count();
        $totalMediaGambar = MediaAsset::with('media')->whereHas(
            'media',
            function ($q) {
                $q->where('mime_type', 'like', 'image/%');
            }
        )->count();

        $totalMediaDok = MediaAsset::with('media')->whereHas(
            'media',
            function ($q) {
                $q->where('mime_type', 'like', 'application/pdf');
            }
        )->count();

        $totalMediaVid = MediaAsset::with('media')->whereHas(
            'media',
            function ($q) {
                $q->where('mime_type', 'like', 'video/%');
            }
        )->count();

        // dd($totalMediaVid);

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

        if ($request->sort === 'oldest') {
            $query->oldest();
        } elseif ($request->sort === 'name') {
            $query->orderBy('name', 'asc');
        } else {
            $query->latest();
        }

        $mediaAssets = $query->paginate(5)->withQueryString();

        return view('cms.media.index', compact(
            'mediaAssets',
            'totalMedia',
            'totalMediaGambar',
            'totalMediaDok',
            'totalMediaVid'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'files' => [
                'required',
                'file',
                'max:10240', // 10 MB for this test
                'mimes:jpg,jpeg,png,webp,pdf',
            ],
        ]);


        $mediaAsset = MediaAsset::create([
            'name' => $validated['name'],
            'alt_text' => $validated['alt_text'] ?? null,
        ]);

        $mediaAsset
            ->addMediaFromRequest('files')
            ->toMediaCollection('library');

        return redirect()
            ->route('cms.media.create')
            ->with('success', 'Media berhasil diupload.');
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
    public function destroy(string $id)
    {
        //
    }
}
