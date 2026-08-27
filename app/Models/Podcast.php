<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $table = 'podcast';

    protected $fillable = [
        'status_id',
        'thumbnail_id',
        'video_id',
        'judul',
        'episode',
        'host',
        'deskripsi',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function thumbnail_asset()
    {
        return $this->belongsTo(MediaAsset::class, 'thumbnail_id');
    }

    public function video_asset()
    {
        return $this->belongsTo(MediaAsset::class, 'video_id');
    }
}
