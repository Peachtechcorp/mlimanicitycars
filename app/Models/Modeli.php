<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modeli extends Model
{
    protected $fillable = ['brand_id', 'name'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function model_codes()
    {
        return $this->hasMany(ModelCode::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
