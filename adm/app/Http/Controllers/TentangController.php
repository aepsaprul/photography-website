<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentangs = Tentang::orderBy('id')->get();

        return view('tentang.index', ['tentangs' => $tentangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tentang.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "nama" => "required|max:50"
        ])->validate();

        $tentangs = Tentang::create([
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi
        ]);

        $request->session()->flash('status', 'Data berhasil disimpan');

        return redirect()->route('tentang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tentang = Tentang::find($id);

        return view('tentang.edit', ['tentang' => $tentang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tentang = Tentang::findOrFail($id);
        $tentang->nama = $request->get('nama');
        $tentang->deskripsi = $request->get('deskripsi');
        $tentang->save();

        return redirect()->route('tentang.index')->with('status', 'tentang succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus(Request $request, $id)
    {
        $tentang = tentang::find($id);
        
        $tentang->delete();

        $request->session()->flash('status', 'Data berhasil dihapus');
        
        return redirect()->route('tentang.index');
    }
}
