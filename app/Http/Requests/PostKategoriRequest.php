<?php

namespace App\Http\Requests;

use App\Models\PostCategory;
use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class PostKategoriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isRole(Role::SUPERADMIN) || $this->user()->can('create',PostCategory::class);
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
            ];
        }else{
            return [
                'name' => ['required', 'string','unique:App\Models\PostCategory,name'],
            ];
        }

    }
}
