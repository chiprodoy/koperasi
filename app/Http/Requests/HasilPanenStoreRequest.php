<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HasilPanenStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tgl_panen'=>['required','date'],
            'jumlah_hasil_panen'=>['required'],
            'luas_lahan'=>['required'],
            'harga_per_kg'=>['required'],
            'uuid'=>['nullable'],
            'anggota_id'=>['nullable']
        ];
    }
}
