<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
        if($this->method()=='PUT'){
            return [
                'name' => ['required', 'string'],
                'email'=>['required','email'],
                'nomor_telpon'=>['required','numeric'],
                'fcm_token'=>['required'],
                'user_roles'=>['required']

            ];
        }else{
            return [
                'name' => ['required', 'string'],
                'password' => ['required'],
                'email' => ['required','email','unique:App\Models\User,email'],
                'nomor_telpon' => ['required','numeric','unique:App\Models\User,nomor_telpon'],
                'fcm_token'=>['required'],
                'user_roles'=>['required']
           ];
        }
    }

     /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function createNewUser()
    {

        $user = User::create([
            'name' => $this->name,
            'uuid'=>'',
            'email' => $this->email,
            'password' => $this->password,
            'nomor_telpon'=> $this->nomor_telpon,
            'fcm_token'=> $this->fcm_token
        ]);
        foreach($this->user_roles as $k => $v){
            $user->roles()->attach($v,['user_modify'=>'su']);
        }
        event(new Registered($user));
        return $user;

    }
}
