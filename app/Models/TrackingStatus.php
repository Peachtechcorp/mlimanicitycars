<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingStatus extends Model
{

    protected $fillable = ["status", "status_code"];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $latest = TrackingStatus::latest()->first();
            $phrase = "TRACKING";
            // dd($latest);
            if (!$latest) {
                $model->status_code = $phrase . '-' . 1;
            } else {
                $arr = explode("-", $latest->status_code);
                $model->status_code = $phrase . '-' . ($arr[1] + 1);
            }
        });
    }
    //
}
