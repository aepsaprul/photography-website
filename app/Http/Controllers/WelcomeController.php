<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $galeris = Galeri::orderBy('id')->get();

        return view('welcome', ['galeris' => $galeris]);
    }
}
