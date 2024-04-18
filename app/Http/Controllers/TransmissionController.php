<?php

namespace App\Http\Controllers;

use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transmissions = Transmission::all();
        return view('resources.transmissions.index', compact('transmissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.transmissions.create');
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

        Transmission::create($request->input());
        return redirect('/transmissions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function show(Transmission $transmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function edit(Transmission $transmission)
    {
        return view('resources.transmissions.edit', compact('transmission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transmission $transmission)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $transmission->update($request->input());

        return redirect('transmissions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transmission $transmission)
    {
        $transmission->delete();
        return redirect('/transmissions');
    }
}
