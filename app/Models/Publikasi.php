<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    protected $table = 'publikasi';

    protected $fillable = [
        'status_id',
        'kategori_id',
        'cover_id',
        'doc_id',
        'judul',
        'edisi',
        'volume',
        'ringkasan',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function cover_asset()
    {
        return $this->belongsTo(MediaAsset::class, 'cover_id');
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
