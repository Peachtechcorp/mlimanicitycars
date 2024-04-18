<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CreateOrderController extends Controller
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
            'customer_id' => 'required',
            'car_id' => 'required',
            'date' => 'required'
        ]);
        $car = Order::create($request->input());
        return redirect('/order');
        //
    }
}
