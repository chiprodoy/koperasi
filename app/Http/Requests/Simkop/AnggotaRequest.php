<?php

namespace App\Http\Requests\Simkop;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AnggotaRequest extends FormRequest
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
            'nik' => 'required|string|unique:anggotas,nik',
            'nama' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'kelurahan' => 'string|max:255',
            'kecamatan' => 'string|max:255',
            'kota' => 'string|max:255',
            'provinsi' => 'string|max:255',
            'telepon' => 'required|string|max:12',
            'nama_ibu' => 'required|string|max:255',
            'tgl_mulai_anggota' => 'date',
            'status_keanggotaan' => 'required',
            'jenis_keanggotaan' => 'required',
            'pekerjaan'=>'nullable|string'
        ];
    }
}
