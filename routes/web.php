<?php

use App\Models\MediaAsset;

use App\Http\Controllers\MediaController;
use App\Http\Controllers\MadingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\PublicPublicationController;

use Illuminate\Support\Facades\Route;

Route::get('/search', [SearchController::class, 'index'])->name('global.search');

// Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// BERITA
Route::prefix('berita')->name('berita.')->group(
    function () {
        Route::get('kategori/{slug}', [PublicPublicationController::class, 'indexBerita'])->name('index');
        Route::get('kategori/{slug}/{artikel}/show', [PublicPublicationController::class, 'showBerita'])->name('show');
    }
);

// PUBLIKASI
Route::prefix('publikasi')->name('publikasi.')->group(
    function () {
        Route::get('kategori/{slug}', [PublicPublicationController::class, 'indexPublikasi'])->name('index');
        Route::get('kategori/{slug}/{publikasi}/show', [PublicPublicationController::class, 'showPublikasi'])->name('show');
    }
);

// MADING
Route::prefix('mading')->name('mading.')->group(
    function () {
        Route::get('/', [PublicPublicationController::class, 'indexMading'])->name('index');
    }
);

// PODCAST
Route::prefix('podcast')->name('podcast.')->group(
    function () {
        Route::get('/', [PublicPublicationController::class, 'indexPodcast'])->name('index');
        Route::get('/{podcast}/show', [PublicPublicationController::class, 'showPodcast'])->name('show');
    }
);

// TENTANG KAMI
Route::get('/tentang-kami', function () {
    return view('public.tentang-kami');
})->name('tentang-kami');



// CMS
Route::prefix('cms')->name('cms.')->group(function () {

    // DASHBOARD
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

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

    // MADING
    Route::resource('mading', MadingController::class);

    // PODCAST
    Route::resource('podcast', PodcastController::class);
});

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
// Route::get('/cms/podcast', function () {
//     return view('cms.podcast.index');
// })->name('cms.podcast.index');
// Create
// Route::get('/cms/podcast/create', function () {
//     return view('cms.podcast.create');
// })->name('cms.podcast.create');
// Show
// Route::get('/cms/podcast/show', function () {
//     return view('cms.podcast.show');
// })->name('cms.podcast.show');

Route::get('/media/{media}/download', function (MediaAsset $media) {
    $spatieMedia = $media->getFirstMedia('library');

    if (!$spatieMedia) {
        abort(404, 'File media tidak ditemukan.');
    }

    return response()->download($spatieMedia->getPath(), $spatieMedia->file_name);
})->name('media.download');

require __DIR__ . '/auth.php';
