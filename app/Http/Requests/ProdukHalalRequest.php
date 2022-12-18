<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukHalalRequest extends FormRequest
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
            'nama_produk' => ['required', 'string'],
            'pelaku_usaha' => ['required', 'string'],
            'jenis_produk_id' => ['required'],
            'nmr_kh_mui' => ['required','unique:App\Models\ProdukHalal,nmr_kh_mui'],


        ];
    }
}
