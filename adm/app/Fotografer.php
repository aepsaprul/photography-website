<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fotografer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'email', 'telepon', 'alamat'
    ];
}
