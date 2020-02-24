<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    use SoftDeletes;
    protected $table = 'vendor';
    protected $primaryKey = 'vendor_id';
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function transaction_condition()
    {
        return $this->hasOne('App\Transaction_condition','vendor_id');
    }

    public function product()
    {
        return $this->hasOne('App\Product','vendor_id');
    }

    public function transaction_order()
    {
        return $this->hasOne('App\Transaction_order','vendor_id');
    }
}
