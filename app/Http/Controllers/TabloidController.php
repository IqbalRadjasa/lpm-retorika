<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class TabloidController extends Controller
{
    public function index()
    {
        return view('public.tabloid.index');
    }

    public function show()
    {
        return view('public.tabloid.show');
    }
}
