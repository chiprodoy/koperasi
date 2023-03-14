<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    protected $fillable = ['title', 'image', 'type', 'link', 'deskripsi'];


    /**
     * Get all of the galeri's counter.
     */
    public function counters()
    {
        return $this->morphMany(Counter::class, 'counterable');
    }


}
