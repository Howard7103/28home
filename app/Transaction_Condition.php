<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Transaction_Condition extends Model
{
    //
    use SoftDeletes;
    protected $table = 'transaction_condition ';
    protected $primaryKey = 'vendor_id';
    public function vendor()
    {
        return $this->belongsTo('App\Vendor','vendor_id');
    }
}
