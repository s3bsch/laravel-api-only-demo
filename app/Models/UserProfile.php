<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToRelation;

class UserProfile extends Model
{
    public function user(): BelongsToRelation
    {
        return $this->belongsTo(User::class);
    }
}
