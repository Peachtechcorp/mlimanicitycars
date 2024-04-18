<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ModelCode extends Model
{
    protected $fillable = ['modeli_id', 'name'];

    public function modeli() {
        return $this->belongsTo(Modeli::class);
    }
}
