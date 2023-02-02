<?php

namespace App\Http\Requests;

use App\Models\Post;
use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $post=Post::withoutGlobalScopes()->where('uuid',$this->uuid)->first();
        if($this->user()->isRole(Role::SUPERADMIN))
            return  true;
        else if($this->user()->can('update',$post))
            return true;
        else if($this->user()->can('createOnCategory',$this->modname))
            return true;
        else
            return false;
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
                'title' => ['required', 'string'],
                'description'=>['required']

            ];
        }else{
            return [
                'title' => ['required', 'string'],
                'slug' => ['unique:App\Models\Post,slug'],
                'description'=>['required']

            ];
        }

    }
}
