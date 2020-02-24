<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    use SoftDeletes;
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public function vendor()
    {
        return $this->hasOne('App\Vendor','user_id');
    }

    public function transaction_order()
    {
        return $this->hasOne('App\Transaction_order','user_id');
    }

    public function customer()
    {
        return $this->hasOne('App\Customer','user_id');
    }

    public function contact_form()
    {
        return $this->hasOne('App\Contact','user_id');
    }

    public function contact_user_id()
    {
        return $this->hasOne('App\Contact','user_id');
    }

}
