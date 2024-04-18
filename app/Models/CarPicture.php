<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarPicture extends Model
{
    protected $fillable = ['car_id', 'link'];

    public function car() {
        return $this->belongsTo(Car::class);
    }
}
