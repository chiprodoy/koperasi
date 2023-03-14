<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
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
        'activity',
        'region',
        'deviceid',
    ];

    /**
     * Get the parent commentable model (post or video).
     */
    public function counterable()
    {
        return $this->morphTo();
    }
}
