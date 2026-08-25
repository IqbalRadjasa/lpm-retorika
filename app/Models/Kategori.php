<?php

namespace App\Models;

use App\Models\Artikel;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    public function artikels()
    {
        return $this->hasMany(Artikel::class);
    }

    public function publikasis()
    {
        return $this->hasMany(Publikasi::class);
    }
}
