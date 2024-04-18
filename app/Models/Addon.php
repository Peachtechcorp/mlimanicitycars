<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    protected $fillable = ['name'];

    public function cars() {
        return $this->belongsToMany(Car::class);
    }
}
