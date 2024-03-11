<?php

namespace App\Models;

use App\Enums\GroupType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'introduction'
    ];

    protected $cast = [
        'type'=>GroupType::class
    ];


    /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */

    public function userGroup():BelongsToMany
    {
        return $this->belongsToMany(User::class,'user_groups','group_id','user_id');
    }

    public function groupPosts():HasMany
    {
        return $this->hasMany(GroupPost::class);
    }
}
