<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class HargaSawitUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        foreach(Auth::user()->roles as $k =>$role){
            if($role->role_name==Role::SUPERADMIN || $role->role_name==Role::ADMIN){
                return true;
            }
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'uuid'=>'required|uuid',
            'keterangan'=>'nullable',
            'tgl_update_harga'=>'required|date_format:Y-m-d',
            'harga'=>'required',
            'komoditas_id'=>'required',
            'sumber'=>'required'
        ];
    }
}
