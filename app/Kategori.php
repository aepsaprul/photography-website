<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama', 'grup'
    ];

    public function data_galeri()
    {
        return $this->hasMany('App\Galeri', 'kategori_id', 'id');
    }
}
