<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HargaSawit extends Model
{
    use HasFactory;

    /** */
    protected $fillable = ['uuid','keterangan','tgl_update_harga','harga','komoditas_id','sumber'];

    /**
     *
    */
    public function setUuidAttribute($value){
        $this->attributes['uuid'] = (Str::isUuid($value) ? $value : Str::uuid()); //
    }

    /** RELASI */
    public function komoditas()
    {
        return $this->belongsTo(Komoditas::class);
    }
}
