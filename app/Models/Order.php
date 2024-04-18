<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['date', 'customer_id', 'car_id', 'order_code', 'status', 'completed_at'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $latest = Order::latest()->first();
            $phrase = "ORDER-";
            // dd($latest);
            if (!$latest) {
                $model->order_code = $phrase . '-' . 1;
            } else {
                $arr = explode("-", $latest->order_code);
                $model->order_code = $phrase . '-' . ($arr[1] + 1);
            }
        });
    }


    public function users()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function cars()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
    //
}
