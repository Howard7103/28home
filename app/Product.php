<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    public function vendor()
    {
        return $this->belongsTo('App\Vendor','vendor_id');
    }

    public function product_category()
    {
        return $this->belongsTo('App\Product_Category','product_category_id');
    }

    public function product_use_experiences()
    {
        return $this->hasOne('App\Product_use_experiences','product_id');
    }
}
