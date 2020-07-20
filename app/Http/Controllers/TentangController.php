<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $galeris = Galeri::get();
        $tentangs = Tentang::orderBy('id')->get();

        return view('tentang.index', ['tentangs' => $tentangs, 'galeris' => $galeris]);
    }
}
