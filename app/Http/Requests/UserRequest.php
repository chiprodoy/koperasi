<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

      return $this->user()->can('create',User::class) || $this->user()->can('update',User::class);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if($this->method()=='PUT'){
            return [
                'name' => ['required', 'string'],
                'email'=>['required','email'],
                'nomor_telpon'=>['required','numeric'],
            ];
        }else{
            return [
                'name' => ['required', 'string'],
                'email' => ['required','email','unique:App\Models\User,email'],
                'nomor_telpon' => ['required','numeric','unique:App\Models\User,nomor_telpon'],
            ];
        }
    }
}
