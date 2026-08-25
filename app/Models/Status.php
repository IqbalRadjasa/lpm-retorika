<?php

namespace App\Models;

use App\Models\Artikel;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    public function artikels()
    {
        return $this->hasMany(Artikel::class);
    }

    public function publikasis()
    {
        return $this->hasMany(Publikasi::class);
    }
}
