<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Body;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarPicture;
use App\Models\Color;
use App\Models\Currency;
use App\Models\DriveUnit;
use App\Models\Fuel;
use App\Models\ModelCode;
use App\Models\Modeli;
use App\Models\SaleCategory;
use App\Models\TrackingStatus;
use App\Models\Transmission;
use App\Models\Wheel;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('resources.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $models = Modeli::all();
        $modelCodes = ModelCode::all();
        $bodies = Body::all();
        $fuels = Fuel::all();
        $transmissions = Transmission::all();
        $driveUnits = DriveUnit::all();
        $wheels = Wheel::all();
        $colors = Color::all();
        $addons = Addon::all();
        $saleCategories = SaleCategory::all();
        $currencies = Currency::all();
        $trackingStatuses = TrackingStatus::all();
        return view('resources.cars.create', compact('brands', 'bodies', 'fuels', 'transmissions', 'driveUnits', 'wheels', 'colors', 'addons', 'saleCategories', 'currencies', 'trackingStatuses', 'models', 'modelCodes'));
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
            'modeli_id' => 'required',
            'body_id' => 'required',
            'fuel_id' => 'required',
            'transmission_id' => 'required',
            'drive_unit_id' => 'required',
            'wheel_id' => 'required',
            'color_id' => 'required',
            'currency_id' => 'required',
            'price' => 'required'
        ]);

        $car = Car::create($request->input());

        if ($request->hasFile('pictures')) {
            $links = upload_files('pictures', "/cars/$car->id");
            foreach ($links as $link) {
                $car->car_pictures()->create([
                    'link' => $link
                ]);
            }
        }

        if ($request->has('addons')) {
            $car->addons()->attach($request->addons);
        }

        if ($request->has('sale_categories')) {
            $car->sale_categories()->attach($request->sale_categories);
        }

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $trackingStatuses = TrackingStatus::all();
        return view('resources.cars.show', compact('car', 'trackingStatuses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $bodies = Body::all();
        $fuels = Fuel::all();
        $models = Modeli::all();
        $modelCodes = ModelCode::all();
        $transmissions = Transmission::all();
        $driveUnits = DriveUnit::all();
        $wheels = Wheel::all();
        $colors = Color::all();
        $addons = Addon::all();
        $saleCategories = SaleCategory::all();
        $currencies = Currency::all();
        $trackingStatuses = TrackingStatus::all();
        return view('resources.cars.edit', compact('car', 'brands', 'bodies', 'fuels', 'transmissions', 'driveUnits', 'wheels', 'colors', 'addons', 'saleCategories', 'currencies', 'trackingStatuses', 'models', 'modelCodes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand_id' => 'required',
            'modeli_id' => 'required',
            'body_id' => 'required',
            'fuel_id' => 'required',
            'transmission_id' => 'required',
            'drive_unit_id' => 'required',
            'wheel_id' => 'required',
            'color_id' => 'required',
            'currency_id' => 'required',
            'price' => 'required'
        ]);

        $car->update($request->input());

        if ($request->hasFile('pictures')) {
            $links = upload_files('pictures', "/cars/$car->id");
            foreach ($links as $link) {
                $car->car_pictures()->create([
                    'link' => $link
                ]);
            }
        }

        if ($request->has('addons')) {
            $car->addons()->sync($request->addons);
        }

        if ($request->has('sale_categories')) {
            $car->sale_categories()->sync($request->sale_categories);
        }

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        foreach ($car->car_pictures as $picture) {
            $picture->delete();
        }
        Storage::deleteDirectory("/public/cars/$car->id");
        $car->addons()->detach();
        $car->sale_categories()->detach();
        $car->delete();
        return redirect('/cars');
    }

    public function deleteCarPicture(CarPicture $carPicture)
    {
        $car_id = $carPicture->car->id;
        $path = get_file_path($carPicture->link);
        $carPicture->delete();
        dd(Storage::delete($path), $path);
        return redirect("/cars/$car_id");
    }
}
