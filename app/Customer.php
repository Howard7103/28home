<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    use SoftDeletes;
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
