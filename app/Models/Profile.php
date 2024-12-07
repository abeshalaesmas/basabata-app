<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'bio',
        'score'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function game(): HasOne {
        return $this->hasOne(Game::class);
    }
}
