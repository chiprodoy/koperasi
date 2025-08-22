<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LahanAnggotaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        foreach(Auth::user()->roles as $k =>$role){
            if($role->role_name==Role::SUPERADMIN || $role->role_name==Role::ADMIN || $role->role_name==Role::ANGGOTA){
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
            'luas_lahan'=>'required'
        ];
    }
}
