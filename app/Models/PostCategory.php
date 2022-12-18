<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

     /**
     * The category that belong to the post.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    /**
     * The category that belong to the parent.
     */
    public function parentCategory()
    {
        return $this->belongsTo(self::class, 'parent_category_id');
    }
}
