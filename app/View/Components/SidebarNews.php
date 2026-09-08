<?php

namespace App\View\Components;

use App\Models\Artikel;
use App\Models\Podcast;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarNews extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View
    {
        $sidebarNews = Artikel::select([
            'id',
            'kategori_id',
            'status_id',
            'judul',
            'created_at',
        ])->with([
            'kategori:id,nama,slug',
            'status:id,slug',
        ])
            ->where('status_id', 2) // Published
            ->latest()
            ->take(5)
            ->get();

        $podcastNewest = Podcast::select([
            'id',
            'status_id',
            'thumbnail_id',
            'judul',
            'created_at'
        ])->with([
            'status:id',
            'thumbnail_asset.media',
            'video_asset.media'
        ])
            ->where('status_id', 2) // Published
            ->latest()
            ->first();

        return view('components.sidebar-news', compact('sidebarNews', 'podcastNewest'));
    }
}
