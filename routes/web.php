<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\TabloidController;
use App\Http\Controllers\BuletinController;
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
// Show
Route::get('/majalah/show', [MajalahController::class, 'show'])->name('majalah.show');

// TABLOID
Route::get('/tabloid', [TabloidController::class, 'index'])->name('tabloid.index');
// Show
Route::get('/tabloid/show', [TabloidController::class, 'show'])->name('tabloid.show');

// Buletin
Route::get('/buletin', [BuletinController::class, 'index'])->name('buletin.index');
// Show
Route::get('/buletin/show', [BuletinController::class, 'show'])->name('buletin.show');

require __DIR__ . '/auth.php';
