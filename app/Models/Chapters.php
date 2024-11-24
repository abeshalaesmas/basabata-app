<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chapters extends Model
{
    use HasFactory;

    protected $fillables = [
        'title',
        'content'
    ];

    protected $guarded = ['id'];
}
