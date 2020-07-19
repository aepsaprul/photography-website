<?php

namespace App\Http\Controllers;

use App\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        return view('reservasi.index');
    }

    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "nama" => "required|max:50"
        ])->validate();

        $reservasis = Reservasi::create([
            "nama" => $request->nama,
            "telepon" => $request->telepon
        ]);

        $request->session()->flash('status', 'Data berhasil dikirim');

        return redirect()->route('reservasi.index');
    }
}
