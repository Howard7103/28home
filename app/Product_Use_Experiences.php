<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product_Use_Experiences extends Model
{
    //
    use SoftDeletes;
    protected $table = 'product_use_experiences';

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }

    public function transaction_order()
    {
        return $this->belongsTo('App\Transaction_order','transaction_order_id');
    }

}
