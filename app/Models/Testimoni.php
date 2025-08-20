<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimoni extends Model
{
    use HasFactory;
        use SoftDeletes;

    protected $fillable = [
        'uuid',
        'nama',
        'photo',
        'pekerjaan',
        'isi_testimoni',
    ];

    /**
     * Get the cover.
     *
     * @param  string  $value
     * @return void
     */
    public function getPhotoAttribute($value)
    {
        if(!empty($value)) return asset('storage/'.$value);
    }
    // Auto set UUID saat create
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid();
            }
        });
    }
}
