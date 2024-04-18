<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleCategory extends Model
{
    protected $fillable = ['name', 'icon'];

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
