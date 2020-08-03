<?php

namespace App\Http\Controllers;

use App\Fotografer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FotograferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotografers = Fotografer::orderBy('id')->get();

        return view('fotografer.index', ['fotografers' => $fotografers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fotografer.input');
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

        $fotografers = Fotografer::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "telepon" => $request->telepon,
            "alamat" => $request->alamat
        ]);

        $request->session()->flash('status', 'Data berhasil disimpan');

        return redirect()->route('fotografer.index');
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
        $fotografer = Fotografer::find($id);

        return view('fotografer.edit', ['fotografer' => $fotografer]);
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
        $fotografer = Fotografer::findOrFail($id);
        $fotografer->nama = $request->get('nama');
        $fotografer->email = $request->get('email');
        $fotografer->telepon = $request->get('telepon');
        $fotografer->alamat = $request->get('alamat');
        $fotografer->save();
        
        return redirect()->route('fotografer.index')->with('status', 'Fotografer succesfully updated');
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
        $fotografer = Fotografer::find($id);
        
        $fotografer->delete();

        $request->session()->flash('status', 'Data berhasil dihapus');
        
        return redirect()->route('fotografer.index');
    }
}
