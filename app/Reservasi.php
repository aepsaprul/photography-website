<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable = [
        'nama', 'telepon', 'alamat'
    ];
}
