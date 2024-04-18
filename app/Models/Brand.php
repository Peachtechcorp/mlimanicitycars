<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['logo', 'name'];

    public function models() {
        return $this->hasMany(Modeli::class);
    }

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
