<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::orderBy('id')->get();

        return view('galeri.index', ['galeris' => $galeris]);
    }
}
