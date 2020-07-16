<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = Galeri::orderBy('id')->get();

        return view('galeri.index', ['galeris' => $galeris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::get();
        return view('galeri.input', ['kategoris' => $kategoris]);
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

        $image_name = null; 
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $image_name = 'galeri_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);
        }

        $galeris = Galeri::create([
            "nama" => $request->nama,
            "keterangan" => $request->keterangan,
            "img" => $image_name,
            "kategori_id" => $request->kategori_id
        ]);

        $request->session()->flash('status', 'Data berhasil disimpan');

        return redirect()->route('galeri.index');
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
        $kategoris = Kategori::get();
        $galeri = Galeri::find($id);

        return view('galeri.edit', ['galeri' => $galeri, 'kategoris' => $kategoris]);
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
        $galeri = Galeri::findOrFail($id);
        $galeri->nama = $request->get('nama');
        $galeri->keterangan = $request->get('keterangan');
        $galeri->kategori_id = $request->get('kategori_id');

        if ($request->hasFile('img')) {
            $destinationPath = public_path('/img');
            File::delete($destinationPath . '/' . $galeri->img);

            $image = $request->file('img');
            $image_name = 'galeri_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);

            $galeri->img = $image_name;
        }
        
        $galeri->save();
        
        return redirect()->route('galeri.index')->with('status', 'galeri succesfully updated');
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
        $galeri = Galeri::find($id);
        
        $galeri->delete();

        $destinationPath = public_path('/img');
        File::delete($destinationPath . '/' . $galeri->img);

        $request->session()->flash('status', 'Data berhasil dihapus');
        
        return redirect()->route('galeri.index');
    }
}
