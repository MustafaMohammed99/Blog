<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{

    public function authorize()
    {
        return  true;
    }


    public function rules()
    {
        $id = $this->route('category');
        return [
            'name' => [
                'required', 'string', 'min:3', 'max:255',
                Rule::unique('categories', 'name')->ignore($id),
            ],
            'image' => $id == null ? 'required|image' : 'image',
            'status' => 'required|in:active,archived',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'This name is already exists!',
        ];
    }
}
