<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $galeris = Galeri::orderBy('id')->get();
        $kontaks = Kontak::orderBy('id')->get();

        return view('kontak.index', ['galeris' => $galeris, 'kontaks' => $kontaks]);
    }
}
