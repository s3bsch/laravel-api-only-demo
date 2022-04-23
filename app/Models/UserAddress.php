<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToRelation;

/**
 * @property-read int $id
 * @property int $user_id
 * @property string $code
 * @property string $city
 * @property string $street
 * @property string|null $comment
 */
class UserAddress extends Model
{
    public function user(): BelongsToRelation
    {
        return $this->belongsTo(User::class);
    }
}
