<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekUmur extends Model
{
    use HasFactory;
    protected $table = 'cek_umur';
    protected $fillable = [
        'title',
        'jenis_syarat_id',
        'min_tahun',
        'max_tahun',
        'min_bulan',
        'max_bulan',
        'min_tanggal',
        'max_tanggal',
        'tahun_sekarang',
        'bulan_sekarang',
        'tanggal_sekarang',
    ];

    public function jenisSyarat()
    {
        return $this->belongsTo(JenisSyarat::class, 'jenis_syarat_id');
    }
}