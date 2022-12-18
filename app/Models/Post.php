<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;

class Post extends Model
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
        'multimedia',
        'tags',
        'post_status',
        'post_type',
        'slug'
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
        ['field'=>'post_type','title'=>'Type'],
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
        $this->attributes['slug'] = Str::slug($this->title);
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
