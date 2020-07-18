<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $tentangs = Tentang::orderBy('id')->get();

        return view('tentang.index', ['tentangs' => $tentangs]);
    }
}
