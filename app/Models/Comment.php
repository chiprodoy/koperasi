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
        'attachment'=> ['field'=>'attachment','title'=>'Lampiran','type'=>InputFile::class],
        'cover'=> ['field'=>'cover','title'=>'Gambar Sampul','type'=>InputFile::class],
        'comment_status'=> ['field'=>'post_status','title'=>'Status','type'=>InputSelect::class,'option'=>[[PostStatus::DRAFT,PostStatus::PUBLISH]]],
        'post_type'=> [
             'field'=>'post_type',
             'title'=>'Type',
             'type'=>InputSelect::class,
             'option'=>[[PostType::BLOG,PostType::PAGE,PostType::MULTIMEDIA]]
         ],
         'slug'=> ['field'=>'slug','title'=>'Slug','type'=>InputText::class],
         'uuid'=> ['field'=>'uuid','type'=>InputHidden::class],
         'tags'=> ['field'=>'tags','type'=>InputHidden::class],
         'view_count'=> ['field'=>'view_count','type'=>InputHidden::class],
         'post_category'=> [
             'field'=>'post_category',
             'title'=>'Kategori',
             'type'=>CheckboxGroup::class,
             'option'=>[
                 PostCategory::class,
                 'id',
                 'name',
                 null, //['and'=>['program_studi_id',Auth::user()->getSelectedProdi()]]
                 ['name','asc'],
                 'categories'
             ],
         ],


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
