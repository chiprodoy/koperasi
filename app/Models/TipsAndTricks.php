<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipsAndTricks extends Model
{
    use HasFactory;

    protected $table = 'tips_and_tricks';

    protected $fillable = ['content'];
}
