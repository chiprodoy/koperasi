<?php

namespace App\Models;

use App\Models\Simkop\Anggota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LahanAnggota extends Model
{
    use HasFactory;

    protected $fillable = ['id','anggota_id','luas_lahan'];

        /**
     *
     */
    protected $casts = [
        'id'=>'integer',
        'luas_lahan'=>'double',
        'anggota_id'=>'integer'
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
