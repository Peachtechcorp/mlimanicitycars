<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand_id',
        'modeli_id',
        'model_code_id',
        'body_id',
        'fuel_id',
        'transmission_id',
        'drive_unit_id',
        'wheel_id',
        'color_id',
        'ref_no',
        'chassis',
        'class',
        'millage',
        'engine_cc',
        'registration_year',
        'manufacture_year',
        'seats',
        'doors',
        'dimension',
        'meter_cubic',
        'weight',
        'seller_comment',
        'imported_from',
        'customs_valuation',
        'first_user',
        'first_seller',
        'video_link',
        'currency_id',
        'price',
        'code',
        'avalability_status',
        'tracking_status_id'

    ];


    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $phrase = "CODE-" . rand(1000, 100000);
            $model->code = $phrase;
        });
    }


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function modeli()
    {
        return $this->belongsTo(Modeli::class);
    }

    public function body()
    {
        return $this->belongsTo(Body::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function drive_unit()
    {
        return $this->belongsTo(DriveUnit::class);
    }

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }

    public function wheel()
    {
        return $this->belongsTo(Wheel::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function car_pictures()
    {
        return $this->hasMany(CarPicture::class);
    }

    public function addons()
    {
        return $this->belongsToMany(Addon::class);
    }

    public function sale_categories()
    {
        return $this->belongsToMany(SaleCategory::class);
    }
}
