<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany as HasManyRelation;
use Illuminate\Database\Eloquent\Relations\HasOne as HasOneRelation;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Collection;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property-read Collection $addresses
 * @method static User firstOrFail()
 */
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

    public function addresses(): HasManyRelation
    {
        return $this->hasMany(UserAddress::class);
    }

    public function profile(): HasOneRelation
    {
        return $this->hasOne(UserProfile::class);
    }
}
