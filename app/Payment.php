<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    use SoftDeletes;
    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    public function transaction_order()
    {
        return $this->hasOne('App\Transaction_order','payment_id');
    }
}
