<?php

namespace App\Http\Controllers;

use App\Models\DriveUnit;
use Illuminate\Http\Request;

class DriveUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drive_units = DriveUnit::all();
        return view('resources.drive_units.index', compact('drive_units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.drive_units.create');
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
        
        DriveUnit::create($request->input());

        return redirect('/drive_units');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DriveUnit  $driveUnit
     * @return \Illuminate\Http\Response
     */
    public function show(DriveUnit $driveUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DriveUnit  $driveUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(DriveUnit $driveUnit)
    {
        return view('resources.drive_units.edit', compact('driveUnit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DriveUnit  $driveUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DriveUnit $driveUnit)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $driveUnit->update($request->input());

        return redirect('/drive_units');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DriveUnit  $driveUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(DriveUnit $driveUnit)
    {
        $driveUnit->delete();
        return redirect('/drive_units');
    }
}
