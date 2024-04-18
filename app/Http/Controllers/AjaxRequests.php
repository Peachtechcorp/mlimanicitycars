<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\Modeli;
use Illuminate\Http\Request;

class AjaxRequests extends Controller
{
    public function getModelsByBrand(Brand $brand) {
        return response()->json($brand->models, 200);
    }

    public function getModelCodesByModel(Modeli $modeli) {
        return response()->json($modeli->model_codes, 200);
    }

    public function getCarsCount(Request $request) {
        $where = $request->query();
        $count = Car::where($where)->get()->count();
        return response()->json($count, 200);
    }
}
