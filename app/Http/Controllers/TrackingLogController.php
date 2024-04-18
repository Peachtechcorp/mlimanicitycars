<?php

namespace App\Http\Controllers;

use App\Models\TrackingLogs;
use Illuminate\Http\Request;

class TrackingLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackingLogs = TrackingLogs::paginate(10);
        return view('resources.tracking_logs.index', compact('trackingLogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrackingLogs  $trackingLogs
     * @return \Illuminate\Http\Response
     */
    public function show(TrackingLogs $trackingLogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrackingLogs  $trackingLogs
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackingLogs $trackingLogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrackingLogs  $trackingLogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackingLogs $trackingLogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrackingLogs  $trackingLogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackingLogs $trackingLog)
    {
        $trackingLog->delete();
        return redirect('/trackingLogs');  //
    }
}
