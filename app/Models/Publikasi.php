<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    protected $table = 'publikasi';

    protected $fillable = [
        'status_id',
        'kategori_id',
        'thumbnail_id',
        'doc_id',
        'judul',
        'edisi_or_vol',
        'ringkasan',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function thumbnail_asset()
    {
        return $this->belongsTo(MediaAsset::class, 'thumbnail_id');
    }

    public function doc_asset()
    {
        return $this->belongsTo(MediaAsset::class, 'doc_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
