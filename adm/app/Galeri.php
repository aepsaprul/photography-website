<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'keterangan', 'img', 'kategori_id'
    ];

    public function data_kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id', 'id');
    }
}
