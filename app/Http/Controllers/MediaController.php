<?php

namespace App\Http\Controllers;

use App\Models\MediaAsset;

use Illuminate\Http\Request;
use ArthurPatriot\Tus\Facades\Tus;
use Illuminate\Support\Facades\DB;
use ArthurPatriot\Tus\Helpers\TusFile;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

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

        if ($request->filled('tipe_media')) {
            if ($request->tipe_media === 'umum') {
                $query->where('tipe', 'umum');
            } elseif ($request->tipe_media === 'galeri') {
                $query->where('tipe', 'galeri');
            }
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
            'tipe' => ['required', 'string'],
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
            'tipe' => $validated['tipe'],
        ]);

        $media = $mediaAsset->addMediaFromRequest('file')
            ->toMediaCollection('library');

        if (str_starts_with($media->mime_type, 'video/')) {
            try {
                $durationInSeconds = FFMpeg::fromDisk($media->disk)
                    ->open($media->getPathRelativeToRoot())
                    ->getDurationInSeconds();

                $media->setCustomProperty('duration', (int) $durationInSeconds);
                $media->save();
            } catch (\Throwable $e) {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Media gagal diupload!');
            }
        }

        return redirect()
            ->route('cms.media.create')
            ->with('success', 'Media berhasil diupload.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MediaAsset $asset)
    {
        $media = $asset->getFirstMedia('library');

        return view('cms.media.show', [
            'asset' => $asset,
            'media' => $media,
        ]);
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
    public function destroy(MediaAsset $asset)
    {
        $asset->delete();

        return redirect()
            ->route('cms.media.index')
            ->with('success', 'Media berhasil dihapus.');
    }

    public function finalize(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'alt_text' => ['nullable', 'string'],
            'tipe' => ['nullable', 'string'],
            'tus_upload_id' => ['required', 'string'],
        ]);

        $tusFile = TusFile::find($validated['tus_upload_id']);

        DB::beginTransaction();

        try {

            $mediaAsset = MediaAsset::create([
                'name' => $validated['name'],
                'alt_text' => $validated['alt_text'] ?? null,
                'tipe' => $validated['tipe'] ?? null,
            ]);

            /*
         * Add the completed TUS file
         * to Spatie Media Library.
         */
            $media = $mediaAsset
                ->addMediaFromDisk(
                    $tusFile->path,
                    config('tus.storage_disk')
                )
                ->toMediaCollection('library');

            if (str_starts_with($media->mime_type, 'video/')) {
                try {
                    $durationInSeconds = FFMpeg::fromDisk($media->disk)
                        ->open($media->getPathRelativeToRoot())
                        ->getDurationInSeconds();

                    $media->setCustomProperty('duration', (int) $durationInSeconds);
                    $media->save();
                } catch (\Throwable $e) {
                    return redirect()
                        ->back()
                        ->withInput()
                        ->with('error', 'Media gagal diupload!');
                }
            }
            /*
         * At this point the file has been
         * successfully copied into the
         * Media Library disk.
         *
         * Now remove the temporary TUS file.
         */
            Tus::storage()->delete($tusFile->path);
            Tus::storage()->delete(
                Tus::path($validated['tus_upload_id'], 'json')
            );

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Media berhasil disimpan.',
                'media' => $mediaAsset->getFirstMedia('library'),
            ]);
        } catch (\Throwable $e) {

            DB::rollBack();

            report($e);

            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan Media Library.',
            ], 500);
        }
    }

    public function selector(Request $request)
    {
        $query = MediaAsset::query()->with('media')->where('tipe', 'umum');

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('filter') && $request->filter !== 'all') {
            $filter = $request->filter;

            $query->whereHas('media', function ($q) use ($filter) {
                if ($filter === 'gambar') {
                    $q->where('mime_type', 'like', 'image/%');
                } elseif ($filter === 'video') {
                    $q->where('mime_type', 'like', 'video/%');
                } elseif ($filter === 'document') {
                    $q->where('mime_type', 'application/pdf');
                }
            });
        }

        if ($request->sort === 'oldest') {
            $query->oldest();
        } elseif ($request->sort === 'name') {
            $query->orderBy('name', 'asc');
        } else {
            $query->latest();
        }

        $media = $query->paginate(6);

        $media->getCollection()->transform(function ($item) {
            $firstMedia = $item->getFirstMedia('library');
            return [
                'id' => $item->id,
                'name' => $item->name,
                'alt_text' => $item->alt_text,
                'url' => $firstMedia?->getUrl(),
                'mime_type' => $firstMedia?->mime_type,
                'extension' => strtoupper(pathinfo($firstMedia?->file_name ?? '', PATHINFO_EXTENSION)),
                'size' => $firstMedia?->human_readable_size ?? 'N/A',
            ];
        });

        return response()->json($media);
    }
}
