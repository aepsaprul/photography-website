<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'deskripsi'
    ];
}
