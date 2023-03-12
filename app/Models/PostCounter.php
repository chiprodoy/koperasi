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
}

