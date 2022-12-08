<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::get();
        return view('backend.slider.list',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slider_title' => 'required',
            'image' => 'nullable',
            'description' => 'required',
            'designation' => 'nullable',
        ]);

        if ($files = $request->file('image')) {
            $fileName = $files->getClientOriginalName();
            $fileName = str_replace(' ', '-', $fileName);
            $files->move(storage_path('/app/public/uploads/slider/'), $fileName);
            $validatedData['image'] = $fileName;
        }

        $slider = Slider::create($validatedData);
           
        return redirect()->route('slider.index')->with('success', 'Data is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        
        return view('backend.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $validatedData = $request->validate([
            'slider_title' => 'required',
            'image' => 'nullable',
            'description' => 'required',
            'designation' => 'nullable',
        ]);

        if ($files = $request->file('image')) {
            $fileName = $files->getClientOriginalName();
            $fileName = str_replace(' ', '-', $fileName);
            $files->move(storage_path('/app/public/uploads/slider/'), $fileName);
            $validatedData['image'] = $fileName;
        }

        Slider::whereId($slider->id)->update($validatedData);
           
        return redirect()->route('slider.index')->with('warning', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider = Slider::findOrFail($slider->id);
        $slider->delete();

        return redirect()->route('slider.index')->with('danger', 'Data is successfully deleted');
    }
}
