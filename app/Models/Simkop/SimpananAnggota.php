<?php

namespace App\Models\Simkop;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class SimpananAnggota extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['uuid','anggota_id','jenis_simpanan_id','tgl_simpanan','jumlah_simpanan'];

    protected $with = ['jenisSimpanan'];
    /**
     *
     */
    protected $casts = [
        'id'=>'integer',
        'anggota_id'=>'integer',
        'jenis_simpanan_id'=>'integer',
        'tgl_simpanan' => 'date',
        'jumlah_simpanan'=>'decimal:2',
    ];
    /**
     * Set mulai anggota
     *
     * @param  string  $value
     * @return void
     */
    public function setTglSimpananAttribute($value)
    {
        $this->attributes['tgl_simpanan'] = (empty($value)) ? Carbon::now()->toDateTimeString() : $value;
    }

    /**
     *
     */
    public function setUuidAttribute($value){
        $this->attributes['uuid'] = (Str::isUuid($value) ? $value : Str::uuid()); //
    }
    /**
     *
     * Relasi
     */
    public function jenisSimpanan()
    {
        return $this->belongsTo(JenisSimpanan::class);
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
