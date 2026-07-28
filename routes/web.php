<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;

use Illuminate\Support\Facades\Route;

// Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Berita
Route::get('/berita/detail', [BeritaController::class, 'detail'])->name('berita.detail');
// Isu Kampus
Route::get('/berita/isu-kampus', [BeritaController::class, 'isuKampus'])->name('berita.isu-kampus');

require __DIR__ . '/auth.php';
