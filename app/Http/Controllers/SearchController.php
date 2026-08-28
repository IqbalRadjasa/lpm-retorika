<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Podcast;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = trim($request->input('q'));

        $artikels = collect();
        $podcasts = collect();
        $publikasis = collect();

        if (!empty($keyword)) {
            // 1. Cari Berita / Artikel
            $artikels = Artikel::with(['kategori', 'media_asset.media'])
                ->where('status_id', 2) // Published
                ->where(function ($q) use ($keyword) {
                    $q->where('judul', 'like', "%{$keyword}%")
                        ->orWhere('ringkasan', 'like', "%{$keyword}%");
                })
                ->latest()
                ->take(10)
                ->get();

            // 2. Cari Podcast
            $podcasts = Podcast::with(['thumbnail_asset.media'])
                ->where('status_id', 2)
                ->where(function ($q) use ($keyword) {
                    $q->where('judul', 'like', "%{$keyword}%")
                        ->orWhere('deskripsi', 'like', "%{$keyword}%");
                })
                ->latest()
                ->take(10)
                ->get();

            // 3. Cari Publikasi
            $publikasis = Publikasi::with(['kategori', 'cover_asset.media'])
                ->where('status_id', 2)
                ->where(function ($q) use ($keyword) {
                    $q->where('judul', 'like', "%{$keyword}%")
                        ->orWhere('deskripsi', 'like', "%{$keyword}%");
                })
                ->latest()
                ->take(10)
                ->get();
        }

        $totalResults = $artikels->count() + $podcasts->count() + $publikasis->count();

        return view('search.index', compact(
            'keyword',
            'artikels',
            'podcasts',
            'publikasis',
            'totalResults'
        ));
    }
}
