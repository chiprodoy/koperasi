<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
   use SoftDeletes,HasFactory;

    public function subMenu(){
        return $this->hasMany(Menu::class);
    }
    public function hasSubMenu(){
        return ($this->subMenu()->count() > 0) ? true : false;
    }
}
