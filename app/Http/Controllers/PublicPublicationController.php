<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Mading;
use App\Models\MediaAsset;
use App\Models\Podcast;
use App\Models\Publikasi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class PublicPublicationController extends Controller
{
    public function indexBerita($slug)
    {

        $artikels = Artikel::with(['kategori', 'media_asset.media', 'status'])
            ->where('status_id', 2) // Published
            ->whereHas('kategori', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->latest()
            ->paginate(5)
            ->withQueryString();

        $kategori = Kategori::where('slug', $slug)->first();

        return view('public.berita.index', compact(
            'artikels',
            'kategori',
        ));
    }

    public function showBerita($slug, Artikel $artikel)
    {
        // dd($artikel);
        if ($artikel->kategori->slug !== $slug) {
            abort(404);
        }

        $artikel->load(['kategori', 'media_asset.media', 'status']);

        return view('public.berita.show', compact(
            'artikel',
            'slug'
        ));
    }

    public function indexPublikasi($slug)
    {
        $publikasis = Publikasi::with(['kategori', 'cover_asset.media', 'doc_asset.media', 'status'])
            ->where('status_id', 2) // Published
            ->whereHas('kategori', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->latest()
            ->paginate(5)
            ->withQueryString();

        $kategori = Kategori::where('slug', $slug)->first();

        return view('public.publikasi.index', compact(
            'publikasis',
            'kategori'
        ));
    }

    public function showPublikasi($slug, Publikasi $publikasi)
    {
        if ($publikasi->kategori->slug !== $slug) {
            abort(404);
        }

        $publikasi->load(['kategori', 'cover_asset.media', 'doc_asset.media', 'status']);

        return view('public.publikasi.show', compact(
            'publikasi',
            'slug'
        ));
    }

    public function indexMading()
    {
        $mading = Mading::with(['status_mading', 'media_asset.media'])
            ->where('status_mading_id', 1) // Aktif
            ->first();

        return view('public.mading.index', compact('mading'));
    }

    public function indexPodcast(Request $request)
    {
        $podcastNewest = Podcast::with(['status', 'thumbnail_asset.media', 'video_asset.media'])
            ->where('status_id', 2) // Published
            ->latest()
            ->first();


        $query = Podcast::query();
        if ($request->sort === 'oldest') {
            $query->oldest();
        } elseif ($request->sort === 'judul') {
            $query->orderBy('judul', 'asc');
        } else {
            $query->latest();
        }
        $podcasts = $query->with(['status', 'thumbnail_asset.media', 'video_asset.media'])
            ->where('status_id', 2) // Published
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view('public.podcast.index', compact('podcasts', 'podcastNewest'));
    }


    public function showPodcast(Podcast $podcast)
    {
        $podcast->load(['status', 'thumbnail_asset.media', 'video_asset.media']);
        $podcastOthers = Podcast::with(['status', 'thumbnail_asset.media', 'video_asset.media'])
            ->where('status_id', 2) // Published
            ->where('id', '!=', $podcast->id) // Skip podcast yang sedang ditampilkan sekarang
            ->latest()
            ->take(3)
            ->get();

        return view('public.podcast.show', compact(
            'podcast',
            'podcastOthers'
        ));
    }

    public function indexTentangKami(Request $request)
    {
        // Mengambil data galeri dengan pagination (misal: 8 per halaman)
        $galeri = MediaAsset::with('media')
            ->where('tipe', 'galeri')
            ->latest()
            ->paginate(8);

        // Jika request dikirim dari AJAX (fetch Alpine.js)
        if ($request->ajax()) {
            return view('public.tentang-kami.partials.gallery-list', compact('galeri'))->render();
        }

        return view('public.tentang-kami.index', compact('galeri'));
    }
}
