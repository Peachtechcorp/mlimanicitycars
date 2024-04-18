<?php

namespace App\Http\Controllers\Inv;

use App\Car;
use App\Http\Controllers\Controller;
use App\TrackingLogs;
use Illuminate\Http\Request;

class TrackingInvController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            "remarks" => ["required"]
        ]);
        $trackinglog = TrackingLogs::create($request->input());
        $car = Car::Where("id", '=', $request->input('car_id'))->limit(1)->update(['tracking_status_id' => $request->input('to_status_id')]);
        return redirect('/cars');
        //dd($request->input());
        //
    }
}
