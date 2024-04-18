<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Modeli;
use Illuminate\Http\Request;

class ModeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelis = Modeli::all();
        return view('resources.models.index', compact('modelis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('resources.models.create', compact('brands'));
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
            'brand_id' => 'required',
            'name' => 'required',
        ]);

        Modeli::create($request->input());

        return redirect('/modelis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modeli  $modeli
     * @return \Illuminate\Http\Response
     */
    public function show(Modeli $modeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modeli  $modeli
     * @return \Illuminate\Http\Response
     */
    public function edit(Modeli $modeli)
    {
        $brands = Brand::all();
        return view('resources.models.edit', compact('modeli', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modeli  $modeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modeli $modeli)
    {
        $request->validate([
            'brand_id' => 'required',
            'name' => 'required'
        ]);

        $modeli->update($request->input());

        return redirect('/modelis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modeli  $modeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modeli $modeli)
    {
        $modeli->delete();
        redirect('/modelis');
    }
}
