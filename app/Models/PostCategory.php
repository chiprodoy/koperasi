<?php

namespace App\Models;

use App\View\Components\Viho\Form\InputFile;
use App\View\Components\Viho\Form\InputHidden;
use App\View\Components\Viho\Form\InputText;
use App\View\Components\Viho\Form\TextArea;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostCategory extends MainModel
{
    use HasFactory;
   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_category_id',
        'name',
        'description',
        'slugs',
        'icon',
        'cover',
        'uuid',
    ];
     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $columns = [
        ['field'=>'name','title'=>'Nama Kategori'],
        ['field'=>'description','title'=>'Deskripsi'],
    ];

         /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $formFields = [
        'name'=>['field'=>'name','title'=>'Nama Kategori','type'=>InputText::class],
        'description'=>['field'=>'description','title'=>'Deskripsi','type'=>TextArea::class],
        'icon'=>['field'=>'icon','title'=>'Icon','type'=>InputFile::class],
        'cover'=>['field'=>'cover','title'=>'Cover','type'=>InputFile::class],
        'slugs'=>['field'=>'slugs','type'=>InputHidden::class],
        'uuid'=>['field'=>'uuid','type'=>InputHidden::class],
        'parent_category_id'=>['field'=>'parent_category_id','type'=>InputHidden::class],

    ];
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

    /**
     * Set the Post slug
     *
     * @param  string  $value
     * @return void
     */
    public function setSlugsAttribute($value)
    {
       $this->attributes['slugs'] = ($value!=Str::slug($this->name) ? Str::slug($this->name) : $value);
    }
}
