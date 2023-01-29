<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends MainModel
{
    use HasFactory;



    protected $dates = ['deleted_at'];

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = ['user_id', 'post_id', 'parent_id', 'isi_komentar','publish','uuid','type'];

   /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $columns = [
        ['field'=>'isi_komentar','title'=>'Isi Komentar'],
        ['field'=>'publish','title'=>'Status'],
    ];

       /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $formFields = [
        'isi_komentar'=> ['field'=>'isi_komentar','title'=>'Isi Komentar','type'=>TextEditor::class],
        'user_id'=> ['field'=>'user_id','type'=>InputHidden::class],
        'post_id'=> ['field'=>'post_id','type'=>InputHidden::class],
        'parent_id'=> ['field'=>'parent_id','type'=>InputHidden::class],
        'uuid'=> ['field'=>'uuid','type'=>InputHidden::class],
        'publish'=> ['field'=>'publish','type'=>InputHidden::class],
        'type'=> ['field'=>'type','type'=>InputHidden::class],



    ];
    /**

     * The belongs to Relationship

     *

     * @var array

     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    /**

     * The has Many Relationship

     *

     * @var array

     */

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}

class CommentType{
    const POSTCOMMENT='postcomment';
    const SARAN='saran';
}

class CommentStatus{
    const DRAFT='draft';
    const PUBLISH='publish';
}
