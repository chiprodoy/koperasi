<?php

namespace App\Models;

use App\View\Components\Viho\Form\CheckboxGroup;
use App\View\Components\Viho\Form\InputFile;
use App\View\Components\Viho\Form\InputHidden;
use App\View\Components\Viho\Form\InputRadio;
use App\View\Components\Viho\Form\InputSelect;
use App\View\Components\Viho\Form\InputText;
use App\View\Components\Viho\Form\TextArea;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;

class Post extends MainModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'attachment',
        'cover',
        'tags',
        'post_status',
        'post_type',
        'slug',
        'uuid',

    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $columns = [
        ['field'=>'title','title'=>'Judul'],
        ['field'=>'description','title'=>'Isi'],
        ['field'=>'post_status','title'=>'Status'],
    ];

   /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $formFields = [
       'title'=> ['field'=>'title','title'=>'Judul','type'=>InputText::class],
       'description'=> ['field'=>'description','title'=>'Isi','type'=>TextArea::class],
       'attachment'=> ['field'=>'attachment','title'=>'Lampiran','type'=>InputFile::class],
       'cover'=> ['field'=>'cover','title'=>'Gambar Sampul','type'=>InputFile::class],
       'post_status'=> ['field'=>'post_status','title'=>'Status','type'=>InputSelect::class,'option'=>[[PostStatus::DRAFT,PostStatus::PUBLISH]]],
       'post_type'=> [
            'field'=>'post_type',
            'title'=>'Type',
            'type'=>InputSelect::class,
            'option'=>[[PostType::BLOG,PostType::PAGE,PostType::MULTIMEDIA]]
        ],
        'slug'=> ['field'=>'slug','title'=>'Slug','type'=>InputText::class],
        'uuid'=> ['field'=>'uuid','type'=>InputHidden::class],
        'tags'=> ['field'=>'tags','type'=>InputHidden::class],
        'tags'=> [
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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['file_url'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['multimedia'];

    protected $with=['categories'];
    /**
     * The categories that belong to the post.
     */
    public function categories()
    {
        return $this->belongsToMany(PostCategory::class);
    }
    /**
     * Set the Post slug
     *
     * @param  string  $value
     * @return void
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = (empty($value)) ? Str::slug($this->title) : $value;
    }
    /**
     * Set the uid.
     *
     * @param  string  $value
     * @return void
     */
    public function getDescriptionAttribute($value)
    {
        return str_replace(array("\r\n","\r","\n","\\r","\\n","\\r\\n"),"\n",$value);
    }
    /**
     * Get url file.
     *
     * @return bool
     */
    public function getFileUrlAttribute($value)
    {
        if(!empty($value)) return route('file.show',$this->slug);
        else return null;
    }

    /**
     * Get url post.
     *
     * @return bool
     */
    public function getPostUrlAttribute()
    {
        return route('post.show',$this->slug);
    }

        /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('published', function (Builder $builder) {
            $builder->where('post_status', '=', 'publish');
        });
    }
}

class PostStatus{
    const PUBLISH='publish';
    const DRAFT='draft';

}
class PostType{
    const BLOG='blog';
    const PAGE='page';
    const MULTIMEDIA='multimedia';
}
