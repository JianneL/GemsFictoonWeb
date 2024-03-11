<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GroupPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'vote'
    ];

    /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */
    public function book():BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function postComments():HasMany
    {
        return $this->hasMany(GroupPostComment::class);
    }
}
