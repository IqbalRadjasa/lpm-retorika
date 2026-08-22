<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
// use Spatie\MediaLibrary\MediaCollections\Models\Media;
// use Spatie\MediaLibrary\MediaCollections\File;

class MediaAsset extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'alt_text',
    ];


    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('library')
            ->useDisk('media');
    }
}
