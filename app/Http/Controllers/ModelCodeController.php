<?php

namespace App\Http\Controllers;

use App\Models\ModelCode;
use App\Models\Modeli;
use Illuminate\Http\Request;

class ModelCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model_codes = ModelCode::all();
        return view('resources.model_codes.index', compact('model_codes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = Modeli::all();
        return view('resources.model_codes.create', compact('models'));
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

        ModelCode::create($request->input());
        return redirect('/model_codes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelCode  $modelCode
     * @return \Illuminate\Http\Response
     */
    public function show(ModelCode $modelCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelCode  $modelCode
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelCode $modelCode)
    {
        $models = Modeli::all();
        return view('resources.model_codes.edit', compact('models', 'modelCode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelCode  $modelCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelCode $modelCode)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $modelCode->update($request->input());
        return redirect('/model_codes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelCode  $modelCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelCode $modelCode)
    {
        $modelCode->delete();
        return redirect('/model_codes');
    }
}
