<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToRelation;

/**
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property Carbon|null $birthday
 */
class UserProfile extends Model
{
    public function user(): BelongsToRelation
    {
        return $this->belongsTo(User::class);
    }
}
