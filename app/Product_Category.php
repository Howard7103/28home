<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    //
    use SoftDeletes;
    protected $table = 'product_category';
    protected $primaryKey = 'product_category_id';
    public function product()
    {
        return $this->hasOne('App\Product','product_category_id');
    }


}
