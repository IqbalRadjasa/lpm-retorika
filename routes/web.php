<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\BerandaController;

use Illuminate\Support\Facades\Route;

// Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// BERITA
Route::get('/berita/detail', [BeritaController::class, 'detail'])->name('berita.detail');
// Isu Kampus
Route::get('/berita/isu-kampus', [BeritaController::class, 'isuKampus'])->name('berita.isu-kampus');
// Nasional
Route::get('/berita/nasional', [BeritaController::class, 'nasional'])->name('berita.nasional');
// Opini
Route::get('/berita/opini', [BeritaController::class, 'opini'])->name('berita.opini');

// MAJALAH
Route::get('/majalah', [MajalahController::class, 'index'])->name('majalah.index');

require __DIR__ . '/auth.php';
