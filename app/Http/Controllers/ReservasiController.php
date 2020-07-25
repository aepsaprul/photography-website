<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $galeris = Galeri::get();
        return view('reservasi.index', ['galeris' => $galeris]);
    }

    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "nama" => "required|max:50"
        ])->validate();

        $reservasis = Reservasi::create([
            "nama" => $request->nama,
            "telepon" => $request->telepon,
            "alamat" => $request->alamat
        ]);

        $request->session()->flash('status', 'Data berhasil dikirim');

        return redirect()->route('reservasi.index');
    }
}
