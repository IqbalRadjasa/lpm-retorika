<?php

namespace App\Models;

use App\Models\Artikel;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class MediaAsset extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'alt_text',
        'tipe',
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('library')
            ->useDisk('media');
    }

    public function artikels()
    {
        return $this->hasMany(Artikel::class);
    }

    public function publikasis()
    {
        return $this->hasMany(Publikasi::class);
    }

    public function mading()
    {
        return $this->hasOne(Mading::class);
    }
}
