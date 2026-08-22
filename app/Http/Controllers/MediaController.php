<?php

namespace App\Http\Controllers;

use App\Models\MediaAsset;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cms.media.index');
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
        // dd($request->files);
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
