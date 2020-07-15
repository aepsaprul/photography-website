<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'keterangan', 'img', 'kategori'
    ];
}
