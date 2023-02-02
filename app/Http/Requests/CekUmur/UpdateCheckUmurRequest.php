<?php

namespace App\Http\Requests\CekUmur;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCheckUmurRequest extends FormRequest
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
            'title' => ['required'],
            'jenis_syarat_id' => ['required'],
            'min_tahun' => ['required', 'integer'],
            'max_tahun' => ['required', 'integer'],
            'min_bulan' => ['required', 'integer'],
            'max_bulan' => ['required', 'integer'],
            'min_tanggal' => ['required', 'integer'],
            'max_tanggal' => ['required', 'integer'],
            'tahun_sekarang' => ['required', 'integer'],
            'bulan_sekarang' => ['required', 'integer'],
            'tanggal_sekarang' => ['required', 'integer'],
        ];
    }
}