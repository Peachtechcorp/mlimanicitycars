<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $fillable = ['order_id', 'payment_method_id', 'references', 'status', 'total_amount', 'date', 'paid_at', 'create_by'];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function methods()
    {
        return $this->belongsTo(PaymentMethod::class, "payment_method_id");
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'create_by');
    }

    //
}
