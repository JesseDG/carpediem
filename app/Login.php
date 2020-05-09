<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use Notifiable;
    protected $table = 'login';
    protected $fillable = ['email', 'password',];
    protected $hidden = ['password',];
    public $timestamps = false;
    /*protected $casts = ['email_verified_at' => 'datetime',];*/

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id')->first();
    }
}
