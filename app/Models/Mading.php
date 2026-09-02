<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mading extends Model
{
    protected $table = 'mading';

    protected $fillable = [
        'status_mading_id',
        'media_id',
        'judul',
    ];

    public function media_asset()
    {
        return $this->belongsTo(MediaAsset::class, 'media_id');
    }

    public function status_mading()
    {
        return $this->belongsTo(StatusMading::class, 'status_mading_id');
    }
}
