<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BerandaController extends Controller
{
    public function index()
    {
        return view('public.beranda');
    }
}
