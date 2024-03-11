<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GroupPostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content'
    ];

    /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */
    public function groupPost():BelongsTo
    {
        return $this->belongsTo(GroupPost::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function postLikes():BelongsToMany
    {
        return $this->belongsToMany(User::class,'post_likes','group_post_comment_id','user_id');
    }
}
