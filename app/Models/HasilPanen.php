<?php

namespace App\Models;

use App\Models\Simkop\Anggota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HasilPanen extends Model
{
    use HasFactory;

    protected $fillable = ['uuid','anggota_id','tgl_panen','jumlah_hasil_panen','luas_lahan','harga_per_kg'];

    /** RELASI */
    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
        /**
     * Set the uid.
     *
     * @param  string  $value
     * @return void
     */
    public function setUuidAttribute($value)
    {
        $this->attributes['uuid'] = (string) Str::uuid();
    }
}
