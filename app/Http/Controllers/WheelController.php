<?php

namespace App\Http\Controllers;

use App\Models\Wheel;
use Illuminate\Http\Request;

class WheelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wheels = Wheel::all();
        return view('resources.wheels.index', compact('wheels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.wheels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Wheel::create($request->input());

        return redirect('/wheels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wheel  $wheel
     * @return \Illuminate\Http\Response
     */
    public function show(Wheel $wheel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wheel  $wheel
     * @return \Illuminate\Http\Response
     */
    public function edit(Wheel $wheel)
    {
        return view('resources.wheels.edit', compact('wheel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wheel  $wheel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wheel $wheel)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $wheel->update($request->input());

        return redirect('/wheels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wheel  $wheel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wheel $wheel)
    {
        $wheel->delete();
        return redirect('/wheels');
    }
}
