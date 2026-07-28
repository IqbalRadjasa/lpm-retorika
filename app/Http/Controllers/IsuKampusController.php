<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class IsuKampusController extends Controller
{
    public function index()
    {
        return view('public.berita.isu-kampus');
    }
}
