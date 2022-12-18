<?php

namespace App\Models;

use App\View\Components\Viho\Form\InputDate;
use App\View\Components\Viho\Form\InputSelect;
use App\View\Components\Viho\Form\InputText;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProdukHalal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_produk',
        'pelaku_usaha',
        'jenis_produk_id',
        'nmr_kh_mui',
        'masaberlaku_kh_mui',
        'nmr_sertifikat_mui',
        'masaberlaku_sertifikat_mui',
        'uuid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

     public static $columns = [
        ['field'=>'nama_produk','title'=>'Nama Produk'],
        ['field'=>'pelaku_usaha','title'=>'Pelaku Usaha'],
        ['field'=>'jenis_produk_id','title'=>'Jenis Produk'],
        ['field'=>'nmr_kh_mui','title'=>'Nomor KH MUI'],
        ['field'=>'masaberlaku_kh_mui','title'=>'Masa Berlaku KH MUI'],
        ['field'=>'nmr_sertifikat_mui','title'=>'Nomor Sertifikat MUI'],
        ['field'=>'masaberlaku_sertifikat_mui','title'=>'Masa Berlaku'],
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $formFields = [
        ['field'=>'nama_produk','title'=>'Nama Produk','type'=>InputText::class],
        ['field'=>'pelaku_usaha','title'=>'Pelaku Usaha','type'=>InputText::class],
        [
            'field'=>'jenis_produk_id',
            'title'=>'Jenis Produk',
            'type'=>InputSelect::class,
            'option'=>JenisProduk::class,
            'required'=>true,
            'placeholder'=>'Jenis Produk'
        ],
        ['field'=>'nmr_kh_mui','title'=>'Nomor KH MUI','type'=>InputText::class],
        ['field'=>'masaberlaku_kh_mui','title'=>'Masa Berlaku KH MUI','type'=>InputDate::class],
        ['field'=>'nmr_sertifikat_mui','title'=>'Nomor Sertifikat MUI','type'=>InputText::class],
        ['field'=>'masaberlaku_sertifikat_mui','title'=>'Masa Berlaku Sertifikat MUI','type'=>InputDate::class],
    ];

    public function setUuidAttribute($alue){
        if(empty($value)) $this->attributes['uuid']=Str::uuid();
    }
}
