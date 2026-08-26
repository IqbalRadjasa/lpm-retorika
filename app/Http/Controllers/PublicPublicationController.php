<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
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
            'kategori'
        ));
    }

    public function showBerita($slug, Artikel $artikel)
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
}
