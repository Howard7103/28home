<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    use SoftDeletes;
    protected $table = 'users';
}
