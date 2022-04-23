<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
