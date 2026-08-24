<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BerandaController extends Controller
{
    public function index()
    {
        $beritaUtama = Artikel::with(['kategori', 'media_asset.media', 'status'])
            ->where('status_id', 2) // Published
            ->latest()
            ->first();
        $beritaLainnya = Artikel::with(['kategori', 'media_asset.media', 'status'])
            ->where('status_id', 2) // Published
            ->latest()
            ->limit(2)
            ->get();


        // dd($beritaLainnya);

        return view('public.beranda', compact(
            'beritaUtama',
            'beritaLainnya'
        ));
    }
}
