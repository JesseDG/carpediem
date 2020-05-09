<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    public $timestamps = false;

    public function login()
    {
        return $this->hasOne(Login::class);
    }

    public function usertype()
    {
        return $this->belongsTo(Usertype::class, 'usertype_id','id')->first();
    }
}
