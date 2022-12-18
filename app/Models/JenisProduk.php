<?php

namespace App\Models;

use App\View\Components\Viho\Form\InputHidden;
use App\View\Components\Viho\Form\InputText;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class JenisProduk extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'jenis_produk','uuid'
    ];

        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static $columns = [
        ['field'=>'jenis_produk','title'=>'Jenis Produk'],

    ];
    public static $formFields = [
        ['field'=>'id','type'=>InputHidden::class],
        ['field'=>'uuid','type'=>InputHidden::class],
        ['field'=>'jenis_produk','title'=>'Jenis Produk','type'=>InputText::class],
    ];

    public function setUuidAttribute($alue){
        if(empty($value)) $this->attributes['uuid']=Str::uuid();
    }
    public function scopeOptionSelect($query){
        $query->select(['id','jenis_produk as optionText']);
    }
}
