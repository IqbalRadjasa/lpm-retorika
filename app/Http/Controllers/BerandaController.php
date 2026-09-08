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

        $publishedArticle = Artikel::select([
            'id',
            'status_id',
            'kategori_id',
            'media_id',
            'judul',
            'ringkasan',
            'created_at',
            'updated_at'
        ])->with([
            'kategori:id,nama,slug',
            'status:id,slug',
            'media_asset.media'
        ])
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
        $podcastNewest = Podcast::select([
            'id',
            'status_id',
            'thumbnail_id',
            'judul',
            'created_at'
        ])->with([
            'status:id,slug',
            'thumbnail_asset.media',
            'video_asset.media'
        ])
            ->where('status_id', 2) // Published
            ->latest()
            ->first();

        // RILISAN TERBARU
        $beritaTerbaru = $publishedArticle
            ->latest()
            ->first();
        $secondaryBerita = $publishedArticle
            ->when($beritaTerbaru, function ($query) use ($beritaTerbaru) {
                return $query->where('id', '!=', $beritaTerbaru->id);
            })
            ->limit(2)
            ->get();
        $remainingBerita = $publishedArticle
            ->latest()
            ->limit(3)
            ->get();

        // BERITA
        $kategoriArtikels = Kategori::select(['id', 'slug'])->where('jenis', 'artikel')->get();

        $slugs = ['isu-kampus', 'nasional', 'opini'];
        $beritaPerKategori = collect($slugs)->mapWithKeys(function ($slug) {
            $artikels = Artikel::select([
                'id',
                'status_id',
                'kategori_id',
                'media_id',
                'judul',
                'ringkasan',
                'created_at',
                'updated_at'
            ])->with(['kategori:id,nama,slug', 'media_asset.media'])
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
        $kategoris = Kategori::select(['id', 'nama', 'slug'])->where('jenis', 'publikasi')
            ->with(['publikasis' => function ($query) {
                $query->where('status_id', 2) // Published
                    ->with(['cover_asset.media', 'status'])
                    ->latest();
            }])
            ->get();

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
