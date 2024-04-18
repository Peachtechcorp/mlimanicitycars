<?php

namespace App\Http\Controllers;

use App\Models\TrackingStatus;
use Illuminate\Http\Request;

class TrackingStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuses = TrackingStatus::all();
        return view('resources.trackings.index', compact('statuses'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.trackings.create'); //
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
            'status' => 'required'
        ]);
        $tracking = TrackingStatus::create($request->input());
        return redirect('/trackings');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrackingStatus  $trackingStatus
     * @return \Illuminate\Http\Response
     */
    public function show(TrackingStatus $trackingStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrackingStatus  $trackingStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackingStatus $trackingStatus)
    {

        return view('resources.trackings.edit', compact('trackingStatus'));  //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrackingStatus  $trackingStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackingStatus $trackingStatus)
    {
        $trackingStatus->update($request->input());
        return redirect("/trackings");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrackingStatus  $trackingStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackingStatus $trackingStatus)
    {

        $trackingStatus->delete();
        return redirect("/trackings");
        //
    }
}
