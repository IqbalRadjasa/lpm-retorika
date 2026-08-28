<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Mading;
use App\Models\Podcast;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BerandaController extends Controller
{
    public function index()
    {
        // MADING
        $mading = Mading::with(['status_mading', 'media_asset.media'])
            ->where('status_mading_id', 1) // Aktif
            ->first();

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

        // PODCAST
        $podcastNewest = Podcast::with(['status', 'thumbnail_asset.media', 'video_asset.media'])
            ->where('status_id', 2) // Published
            ->latest()
            ->first();

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

        // PUBLIKASI
        $kategoris = Kategori::where('jenis', 'publikasi')
            ->with(['publikasis' => function ($query) {
                $query->where('status_id', 2) // Published
                    ->with(['cover_asset.media', 'status'])
                    ->latest();
            }])
            ->get();
        $publikasi = Publikasi::with(['kategori', 'cover_asset.media', 'status'])
            ->where('status_id', 2) // Published
            ->latest()
            ->first();


        // dd($beritaPerKategori);
        return view('beranda.index', compact(
            'mading',
            'beritaUtama',
            'beritaLainnya',
            'podcastNewest',
            'beritaTerbaru',
            'secondaryBerita',
            'remainingBerita',
            'kategoriArtikels',
            'beritaPerKategori',
            'kategoris'
        ));
    }
}
