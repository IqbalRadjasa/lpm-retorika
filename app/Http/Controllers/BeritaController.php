<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BeritaController extends Controller
{
    public function index($slug = null)
    {
        // dd($kategori);
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
            'kategori'
        ));
    }

    public function nasional()
    {
        return view('public.berita.nasional');
    }

    public function opini()
    {
        return view('public.berita.opini');
    }

    public function detail()
    {
        return view('public.berita.detail-berita');
    }
}
