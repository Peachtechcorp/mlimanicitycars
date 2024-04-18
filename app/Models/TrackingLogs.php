<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingLogs extends Model
{
    protected $fillable = ['user_id', 'from_status_id', 'to_status_id', 'remarks', 'car_id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cars()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function carFrom()
    {
        return $this->belongsTo(TrackingStatus::class, 'from_status_id');
    }
    public function carTo()
    {
        return $this->belongsTo(TrackingStatus::class, 'to_status_id');
    }
    //
}
