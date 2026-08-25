<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BerandaController extends Controller
{
    public function index()
    {
        $publishedArticle = Artikel::with(['kategori', 'media_asset.media', 'status'])
            ->where('status_id', 2);

        // HERO
        $beritaUtama = $publishedArticle
            ->latest()
            ->first();
        $beritaLainnya = $publishedArticle
            ->latest()
            ->limit(2)
            ->skip(1)
            ->get();

        // RILISAN TERBARU
        $beritaTerbaru = $publishedArticle
            ->latest()
            ->first();
        $secondaryBerita = $publishedArticle
            ->limit(2)
            ->get();
        $remainingBerita = $publishedArticle
            ->latest()
            ->limit(3)
            ->get();

        // BERITA
        $kategoriArtikels = Kategori::where('jenis', 'artikel')->get();

        $slugs = ['isu-kampus', 'nasional', 'opini'];
        $beritaPerKategori = collect($slugs)->mapWithKeys(function ($slug) {
            $artikels = Artikel::with(['kategori', 'media_asset.media'])
                ->where('status_id', 2)
                ->whereHas('kategori', function ($q) use ($slug) {
                    $q->where('slug', $slug);
                })
                ->latest()
                ->limit(5)
                ->get();

            return [$slug => [
                'parent' => $artikels->first(),      // 1 Artikel Utama
                'sub_parent' => $artikels->skip(1),  // 4 Artikel Sisanya
            ]];
        });

        // dd($beritaPerKategori);
        return view('public.beranda', compact(
            'beritaUtama',
            'beritaLainnya',
            'beritaTerbaru',
            'secondaryBerita',
            'remainingBerita',
            'kategoriArtikels',
            'beritaPerKategori',
        ));
    }
}
