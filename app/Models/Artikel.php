<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'kategori_id',
        'media_id',
        'status_id',
        'judul',
        'penulis',
        'ringkasan',
        'isi_artikel',
    ];
}
