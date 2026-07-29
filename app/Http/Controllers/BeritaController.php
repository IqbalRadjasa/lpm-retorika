<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BeritaController extends Controller
{
    public function isuKampus()
    {
        return view('public.berita.isu-kampus');
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
