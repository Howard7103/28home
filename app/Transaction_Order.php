<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Transaction_Order extends Model
{
    //
    use SoftDeletes;
    protected $table = 'transaction_order ';
    protected $primaryKey = 'transaction_order_id';
    public function product_use_experiences()
    {
        return $this->hasOne('App\Product_use_experiences','transaction_order_id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment','payment_id');
    }

    public function Vendor()
    {
        return $this->belongsTo('App\Vendor','vendor_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
