<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $table = 'forum';
    protected $fillable = ['konten_forum', 'user_id', 'like', 'show', 'share'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function forumKomen()
    {
        return $this->hasMany(ForumKomen::class, 'forum_id');
    }
}