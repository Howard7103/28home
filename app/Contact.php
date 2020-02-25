<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    use SoftDeletes;
    protected $table = 'contact';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function user_id()
    {
        return $this->hasOne('App\User','user_id');
    }
}
