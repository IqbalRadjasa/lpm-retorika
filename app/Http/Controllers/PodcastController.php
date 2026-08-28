<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Podcast;
use App\Models\Kategori;

use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $statuses = Status::all();

        $query = Podcast::query();
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status_id')) {
            $query->where('status_id', $request->status_id);
        }

        if ($request->sort === 'oldest') {
            $query->oldest();
        } elseif ($request->sort === 'name') {
            $query->orderBy('name', 'asc');
        } else {
            $query->latest();
        }

        $totalPodcast = (clone $query)->count();
        $totalDrafted = (clone $query)->where('status_id', 1)->count();
        $totalPublished = (clone $query)->where('status_id', 2)->count();

        $podcasts = $query->with(['status', 'thumbnail_asset.media', 'video_asset.media'])
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('cms.podcast.index', compact(
            'statuses',
            'podcasts',
            'totalPodcast',
            'totalDrafted',
            'totalPublished'
        ));
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
    public function show(Podcast $podcast)
    {
        $podcast->load(['status', 'thumbnail_asset.media', 'video_asset.media']);

        return view('cms.podcast.show', compact('podcast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Podcast $podcast)
    {
        $podcast->load(['status', 'thumbnail_asset.media', 'video_asset.media']);
        $statuses = Status::all();

        return view('cms.podcast.edit', compact(
            'podcast',
            'statuses'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Podcast $podcast)
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
            $podcast->update([
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
                ->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            // dd($e);
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal memperbarui data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        try {
            $podcast->delete();

            return redirect()
                ->route('cms.podcast.index')
                ->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $th) {
            return redirect()
                ->back()
                ->with('error', 'Gagal menghapus data!');
        }
    }
}
