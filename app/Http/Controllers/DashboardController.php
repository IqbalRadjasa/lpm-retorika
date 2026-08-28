<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Podcast;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // WIDGETS
        $totalArtikel = Artikel::with(['kategori', 'media_asset.media', 'status'])->count();
        $totalPublikasi = Publikasi::with(['kategori', 'cover_asset.media', 'doc_asset.media', 'status'])->count();
        $totalPodcast = Podcast::with(['status', 'thumbnail_asset.media', 'video_asset.media'])->count();

        // NEWEST ARTIKEL
        $newestArtikel = Artikel::with('status', 'kategori')
            ->latest()
            ->take(5)
            ->get();

        // NEWEST PUBLIKASI
        $newestPublikasi = Publikasi::with(['kategori', 'cover_asset.media', 'doc_asset.media', 'status'])
            ->where('status_id', 2) // Published
            ->latest()
            ->take(3)
            ->get();

        // NEWEST PODCAST
        $newestPodcast = Podcast::with(['status', 'thumbnail_asset.media', 'video_asset.media'])
            ->where('status_id', 2) // Published
            ->latest()
            ->take(4)
            ->get();

        return view('cms.dashboard', compact(
            'totalArtikel',
            'totalPublikasi',
            'totalPodcast',
            'newestArtikel',
            'newestPublikasi',
            'newestPodcast',
        ));
    }
}
