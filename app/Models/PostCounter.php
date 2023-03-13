<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCounter extends Model
{
    use HasFactory;

    public const like='like';
    public const share='share';
    public const view='view';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_id',
        'activity',
        'region',
        'deviceid',
    ];

        /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::created(function ($counter) {
            $post=Post::find($counter->post_id);
            if($counter->activity==PostCounter::like)
                $post->like_count=$post->like_count+1;
            if($counter->activity==PostCounter::view)
                $post->view_count=$post->view_count+1;
            if($counter->activity==PostCounter::share)
                $post->share_count=$post->share_count+1;

            $post->save();

        });
    }
}

