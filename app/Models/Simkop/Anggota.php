<?php

namespace App\Models\Simkop;

use Illuminate\Support\Str;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use HasFactory,SoftDeletes;
    const STATUS_AKTIF =1;
    const STATUS_NONAKTIF =0;

    protected $fillable = [
        'uuid',
        'nomor_anggota',
        'nik',
        'nama',
        'tgl_lahir',
        'jenis_kelamin',
        'pekerjaan',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'telepon',
        'nama_ibu',
        'photo',
        'tgl_mulai_anggota',
        'status_keanggotaan',
        'jenis_keanggotaan'
    ];

    /**
     * The attributes that display on table or index.
     *
     * @var array<int, string>
     */
    public static $columns = [
        ['field' => 'nomor_anggota', 'title' => 'No Anggota'],
        ['field' => 'nama', 'title' => 'Nama'],
        ['field' => 'telepon', 'title' => 'Telepon'],
        ['field' => 'jenis_kelamin', 'title' => 'Jenis Kelamin'],

    ];

    /**
     * Set nomor anggota
     *
     * @param  string  $value
     * @return void
     */
    public function setNomorAnggotaAttribute($value)
    {
        $this->attributes['nomor_anggota'] = (empty($value)) ? $this->generateNomorAnggota() : $value;
    }

    /**
     * Set mulai anggota
     *
     * @param  string  $value
     * @return void
     */
    public function setTglMulaiAnggotaAttribute($value)
    {
        $this->attributes['tgl_mulai_anggota'] = (empty($value)) ? Carbon::now()->toIso8601String() : $value;
    }

    /**
     *
     */
    private function generateNomorAnggota()
    {
        $prefix = Carbon::now()->format('Ymd'); // contoh: 20250720

        // Cek jumlah anggota hari ini
        $last = self::where('nomor_anggota', 'like', $prefix . '%')
            ->orderBy('nomor_anggota', 'desc')
            ->first();

        if ($last) {
            // Ambil angka terakhir dan tambahkan 1
            $lastNumber = (int) substr($last->nomor_anggota, -5);
            $nextNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        } else {
            $nextNumber = '00001';
        }

        return $prefix . $nextNumber;
    }

    public function setUuidAttribute($value){
        $this->attributes['uuid'] = (Str::isUuid($value) ? $value : Str::uuid()); //
    }
}




