<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityQuestion extends Model
{
    use HasFactory;

    protected $table = 'personality_questions';

    protected $fillable = ['question', 'image', 'options', 'correct_option'];

    protected $casts = [
        'options' => 'array'
    ];
}
