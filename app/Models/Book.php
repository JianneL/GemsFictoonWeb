<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'summary',
        'genre_id',
        'image'
    ];


    /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */

     public function bookChapters():HasMany
     {
        return $this->hasMany(BookChapter::class);
     }

     public function bookComments():HasMany
     {
        return $this->hasMany(BookComment::class);
     }

     public function bookCategories():BelongsToMany
     {
        return $this->belongsToMany(Category::class,'book_categories','book_id','category_id');
     }

     public function bookLikes():BelongsToMany
     {
        return $this->belongsToMany(User::class,'book_likes','book_id','user_id');
     }
}
