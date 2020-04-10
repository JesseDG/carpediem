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
}

/**
 * Admin: Danny DG none danny@test.com 123 ID: 1
 * Student: Walid TB none walid@test.com abc ID: 3
 * Tutor: Ian NJ none ian@test.com test ID: 2
 */