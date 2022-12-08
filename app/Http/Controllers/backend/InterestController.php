<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interest;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interest = Interest::get();
        return view('backend.interest.list',compact('interest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.interest.create');
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
            'bank_name' => 'required',
            'period' => 'required',
            'percentage' => 'required',
        ]);

        $interest = Interest::create($validatedData);
           
        return redirect()->route('interest.index')->with('success', 'Data is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function show(Interest $interest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function edit(Interest $interest)
    {
        return view('backend.interest.edit',compact('interest','interest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interest $interest)
    {
        $validatedData = $request->validate([
            'bank_name' => 'required',
            'period' => 'required',
            'percentage' => 'required',
        ]);

        Interest::whereId($interest->id)->update($validatedData);
           
        return redirect()->route('interest.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interest $interest)
    {
        $interest = Interest::findOrFail($interest->id);
        $interest->delete();

        return redirect()->route('interest.index')->with('danger', 'Data is successfully deleted');
    }
}
