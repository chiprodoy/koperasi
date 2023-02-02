<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSyarat extends Model
{
    use HasFactory;
    protected $table = 'jenis_syarat';
    protected $fillable = ['name'];
}