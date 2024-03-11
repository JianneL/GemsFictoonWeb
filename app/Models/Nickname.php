<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nickname extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];


    /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
