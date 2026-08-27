<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Status;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cms.podcast.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::all();

        return view('cms.podcast.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'status_id' => 'required|integer|max:10',
            'thumbnail_id' => 'required|integer',
            'video_id' => 'required|integer',
            'judul' => 'required|string|max:100',
            'episode' => 'required|string|max:100',
            'host' => 'required|string|max:100',
            'deskripsi' => 'required|string',
        ]);

        try {
            // dd('success');
            Podcast::create([
                'status_id' => $validated['status_id'],
                'thumbnail_id' => $validated['thumbnail_id'],
                'video_id' => $validated['video_id'],
                'judul' => $validated['judul'],
                'episode' => $validated['episode'],
                'host' => $validated['host'],
                'deskripsi' => $validated['deskripsi'],
            ]);

            return redirect()
                ->route('cms.podcast.index')
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
    public function destroy(string $id)
    {
        //
    }
}
