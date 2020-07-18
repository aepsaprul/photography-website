<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
        'nama', 'keterangan', 'img', 'kategori_id'
    ];

    public function data_kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id', 'id');
    }
}
