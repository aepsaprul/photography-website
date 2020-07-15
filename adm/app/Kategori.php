<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'grup'
    ];
}
