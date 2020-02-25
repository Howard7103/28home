<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Popular_Vendor extends Model
{
    //
    use SoftDeletes;
    protected $table = 'popular_vendor';
}
