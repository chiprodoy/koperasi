<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumKomen extends Model
{
    use HasFactory;
    protected $table = 'forum_komen';
    protected $fillable = ['user_id', 'forum_id', 'komen_forum'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum_id');
    }
}