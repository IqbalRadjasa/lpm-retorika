<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BeritaController extends Controller
{
    public function index($slug)
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

    public function show($slug, Artikel $artikel)
    {
        if ($artikel->kategori->slug !== $slug) {
            abort(404);
        }

        $artikel->load(['kategori', 'media_asset.media', 'status']);

        return view('public.berita.show', compact(
            'artikel',
            'slug'
        ));
    }
}
