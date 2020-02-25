<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Popular_Product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'popular_product';
}
