<?php

use App\Http\Controllers\AddonController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CreateOrderController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DriveUnitController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\Inv\TrackingInvController;
use App\Http\Controllers\ModelCodeController;
use App\Http\Controllers\ModeliController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\SaleCategoryController;
use App\Http\Controllers\TrackingLogController;
use App\Http\Controllers\TrackingStatusController;
use App\Http\Controllers\TransmissionController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WheelController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [WebController::class, "home"])->name("user.home");
Route::post('/search', [WebController::class, "search"])->name("search");
Route::get('car/{car}', [WebController::class, "show"])->name('car');
Route::get('/shop', [WebController::class, "shop"]);
Route::get('brand/{brand}', [WebController::class, "brand"])->name('brand');
Route::get('body/{body}', [WebController::class, "body"])->name("body");
Route::get("color/{color}", [WebController::class, "color"])->name("color");
Route::get("/about", [WebController::class, "about"])->name("about");
Route::get("/contact", [WebController::class, "contact"])->name("contact");

//Route::get("/link", "Inv\StorageLinkController");
//Route::get("/optimize", "Ink\OptimizeController");




Route::middleware('auth')->group(function () {
    Route::resource("brands", BrandController::class);
    Route::resource("modelis", ModeliController::class);
    Route::resource("model_codes", ModelCodeController::class);
    Route::resource("bodies", BodyController::class);
    Route::resource("fuels", FuelController::class);
    Route::resource("transmissions", TransmissionController::class);
    Route::resource("wheels", WheelController::class);
    Route::resource("drive_units", DriveUnitController::class);
    Route::resource("colors", ColorController::class);
    Route::resource("addons", AddonController::class);
    Route::resource("sale_categories", SaleCategoryController::class);

    Route::resource("cars", CarController::class);
    Route::delete("/cars/car_pictures/{carPicture}", [CarController::class, "deleteCarPicture"]);

    Route::resource("currencies", CurrencyController::class);
    Route::resource("/orders", OrderController::class);
    Route::resource("/paymentMethods", PaymentMethodController::class);
    Route::resource("/payments", PaymentController::class);
    Route::resource("trackings", TrackingStatusController::class);
    Route::post("trackingInv", TrackingInvController::class)->name("trackingInv.submit");
    Route::resource("trackingLogs", TrackingLogController::class);
    Route::post("/create/order", CreateOrderController::class)->name("create.order");
    Route::get("/order", [WebController::class, "order"])->name("order");
    Route::get('/home', [WebController::class, "home"])->name('home');
});
