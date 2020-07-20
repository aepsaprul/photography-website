<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id')->get();

        return view('slider.index', ['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Slider::get();
        return view('galeri.input', ['sliders' => $sliders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_name = null; 
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $image_name = 'galeri_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);
        }

        $sliders = Slider::create([
            "img" => $image_name
        ]);

        $request->session()->flash('status', 'Data berhasil disimpan');

        return redirect()->route('slider.index');
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
        $slider = Slider::find($id);

        return view('slider.edit', ['slider' => $slider]);
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
        $slider = Slider::findOrFail($id);

        if ($request->hasFile('img')) {
            $destinationPath = public_path('/img');
            File::delete($destinationPath . '/' . $slider->img);

            $image = $request->file('img');
            $image_name = 'slider_' . time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $image_name);

            $slider->img = $image_name;
        }
        
        $slider->save();
        
        return redirect()->route('slider.index')->with('status', 'slider succesfully updated');
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
        $slider = Slider::find($id);
        
        $slider->delete();

        $destinationPath = public_path('/img');
        File::delete($destinationPath . '/' . $slider->img);

        $request->session()->flash('status', 'Data berhasil dihapus');
        
        return redirect()->route('slider.index');
    }
}
