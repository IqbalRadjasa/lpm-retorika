<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusMading extends Model
{
    protected $table = 'status_mading';

    protected $fillable = [
        'nama',
        'slug',
        'pesan',
    ];

    public function mading()
    {
        return $this->hasOne(Mading::class);
    }
}
