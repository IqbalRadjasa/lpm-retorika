<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MadingController;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\TabloidController;
use App\Http\Controllers\BuletinController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PublikasiController;

use Illuminate\Support\Facades\Route;

// Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// BERITA
Route::get('/berita/kategori/{slug}', [BeritaController::class, 'index'])->name('berita.index');
// Show
Route::get('/berita/kategori/{slug}/{artikel}/show', [BeritaController::class, 'show'])->name('berita.show');

// PODCAST
Route::get('/podcast', function () {
    return view('public.podcast.index');
})->name('podcast.index');
// Show
Route::get('/podcast/show', function () {
    return view('public.podcast.show');
})->name('podcast.show');

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

// MADING
Route::get('/mading', [MadingController::class, 'index'])->name('mading.index');

// TENTANG KAMI
Route::get('/tentang-kami', function () {
    return view('public.tentang-kami');
})->name('tentang-kami');



// CMS
Route::prefix('cms')->name('cms.')->group(function () {

    // DASHBOARD
    Route::get('/dashboard', function () {
        return view('cms.dashboard');
    })->name('dashboard');

    // ARTIKEL
    Route::resource('artikel', ArtikelController::class);

    // MEDIA
    Route::post('media/finalize', [MediaController::class, 'finalize'])
        ->name('media.finalize');

    Route::get('media/selector', [MediaController::class, 'selector'])
        ->name('media.selector');

    Route::resource('media', MediaController::class)
        ->parameters([
            'media' => 'asset',
        ]);

    // PUBLIKASI
    Route::resource('publikasi', PublikasiController::class);
});

// PUBLIKASI
// Route::get('/cms/publikasi', function () {
//     return view('cms.publikasi.index');
// })->name('cms.publikasi.index');
//  Create
// Route::get('/cms/publikasi/form', function () {
//     return view('cms.publikasi.form');
// })->name('cms.publikasi.form');
//  Show
// Route::get('/cms/publikasi/show', function () {
//     return view('cms.publikasi.show');
// })->name('cms.publikasi.show');

// MADING
Route::get('/cms/mading', function () {
    return view('cms.mading.index');
})->name('cms.mading.index');
// Edit
Route::get('/cms/mading/edit', function () {
    return view('cms.mading.edit');
})->name('cms.mading.edit');


// KATEGORI
Route::get('/cms/kategori', function () {
    return view('cms.kategori.index');
})->name('cms.kategori.index');
// Create
Route::get('/cms/kategori/create', function () {
    return view('cms.kategori.create');
})->name('cms.kategori.create');
// Edit
Route::get('/cms/kategori/edit', function () {
    return view('cms.kategori.edit');
})->name('cms.kategori.edit');
// Show
Route::get('/cms/kategori/show', function () {
    return view('cms.kategori.show');
})->name('cms.kategori.show');

// PODCAST
Route::get('/cms/podcast', function () {
    return view('cms.podcast.index');
})->name('cms.podcast.index');
// Create
Route::get('/cms/podcast/create', function () {
    return view('cms.podcast.create');
})->name('cms.podcast.create');
// Show
Route::get('/cms/podcast/show', function () {
    return view('cms.podcast.show');
})->name('cms.podcast.show');



require __DIR__ . '/auth.php';
