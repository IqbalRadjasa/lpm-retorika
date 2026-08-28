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
        $sidebarNews = Artikel::with('status', 'kategori')
            ->where('status_id', 2) // Published
            ->latest()
            ->take(5)
            ->get();

        $podcastNewest = Podcast::with(['status', 'thumbnail_asset.media', 'video_asset.media'])
            ->where('status_id', 2) // Published
            ->latest()
            ->first();

        return view('components.sidebar-news', compact('sidebarNews', 'podcastNewest'));
    }
}
