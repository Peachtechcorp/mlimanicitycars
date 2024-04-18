<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\DriveUnit;
use App\Models\Fuel;
use App\Models\Order;
use App\Models\SaleCategory;
use App\Models\Transmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function home()
    {
        $brands = Brand::has('cars')->orderBy("name", "asc")->take(24)->get();
        $saleCategories = SaleCategory::has('cars')->offset(0)->limit(2)->get();
        $carCategories = SaleCategory::has('cars')->offset(2)->limit(5)->get();
        return view('web.home.index', compact("brands", "saleCategories", "carCategories"));
    }

    public function search(Request $request)
    {
        $queries = $request->input();
        $filter = [];
        foreach ($queries as $key => $value) {
            if ($key !== '_token' && $value) {
                $filter[$key] = $value;
            }
        }

        //dd($filter);
        $cars = Car::where($filter)->paginate(10);


        $brands = Brand::all();
        $bodies = Body::all();
        $fuels = Fuel::all();
        $transmissions = Transmission::all();
        $colors = Color::all();
        $drive_units = DriveUnit::all();
        $saleCategories = SaleCategory::has('cars')->get();
        return view('web.shop.index', compact('cars', 'brands', 'bodies', 'drive_units', 'fuels', 'transmissions', 'colors', 'saleCategories'));
    }

    public function show(Car $car)
    {
        $saleCategories = SaleCategory::has('cars')->offset(3)->limit(1)->get();

        return view('web.shop-single.index', compact('car', 'saleCategories'));
    }

    public function shop()
    {
        $cars = Car::paginate(10);
        $brands = Brand::paginate(6);
        $bodies = Body::all();
        $colors = Color::all();
        return view('web.shop.index', compact('cars', 'brands', 'bodies', 'colors'));
    }


    public function brand(Brand $brand)
    {
        $cars = Car::where('brand_id', '=', $brand->id)->paginate(10);
        $brands = Brand::paginate(6);
        $bodies = Body::all();
        $colors = Color::all();
        return view('web.shop.index', compact('cars', 'brands', 'bodies', 'colors'));
    }

    public function body(Body $body)
    {
        $cars = Car::where('body_id', '=', $body->id)->paginate(10);
        $brands = Brand::paginate(6);
        $bodies = Body::all();
        $colors = Color::all();
        return view('web.shop.index', compact('cars', 'brands', 'bodies', 'colors'));
    }


    public function color(Color $color)
    {
        $cars = Car::where('color_id', '=', $color->id)->paginate(10);
        $brands = Brand::paginate(6);
        $bodies = Body::all();
        $colors = Color::all();
        return view('web.shop.index', compact('cars', 'brands', 'bodies', 'colors'));
    }

    public function order()
    {
        $user_id = Auth::user()->id;
        $orders = Order::where('customer_id', '=', $user_id)->get();
        return view('web.my-orders.index', compact('orders'));
    }

    public function about()
    {
        return view('web.about.index');
    }

    public function contact()
    {
        return view('web.contact.index');
    }
}
