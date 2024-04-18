<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $fillable = ['name', 'logo'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
