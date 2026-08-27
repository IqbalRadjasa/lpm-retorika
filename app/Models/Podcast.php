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
}
