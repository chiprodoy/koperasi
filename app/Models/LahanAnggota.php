<?php

namespace App\Models;

use App\Models\Simkop\Anggota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LahanAnggota extends Model
{
    use HasFactory;

    protected $fillable = ['id','anggota_id','luas_lahan'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
