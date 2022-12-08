<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::get();
        return view('backend.faq.list',compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.faq.create');
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
            'faq_title' => 'required',
            'description' => 'nullable',
            'serial' => 'nullable',
        ]);

        $faq = Faq::create($validatedData);
           
        return redirect()->route('faq.index')->with('success', 'Data is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('backend.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $validatedData = $request->validate([
            'faq_title' => 'required',
            'description' => 'nullable',
            'serial' => 'nullable',
        ]);

        Faq::whereId($faq->id)->update($validatedData);
           
        return redirect()->route('faq.index')->with('success', 'Data is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq = Faq::findOrFail($faq->id);
        $faq->delete();

        return redirect()->route('faq.index')->with('danger', 'Data is successfully deleted');
    }
}
