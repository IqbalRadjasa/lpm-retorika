<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\MediaAsset;
use App\Models\Status;

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

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function media_asset()
    {
        return $this->belongsTo(MediaAsset::class, 'media_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
