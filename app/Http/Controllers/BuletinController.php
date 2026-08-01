<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BuletinController extends Controller
{
    public function index()
    {
        return view('public.buletin.index');
    }

    public function show()
    {
        return view('public.buletin.show');
    }
}
