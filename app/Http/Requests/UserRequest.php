<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        if (Auth::user()->type === 'admin') {
            return  true;
        }
        return false;
    }


    public function rules()
    {
        $id = $this->route('category');
        return [
            'name' => [
                'required', 'string', 'min:3', 'max:255',
                Rule::unique('categories', 'name')->ignore($id),
            ],
            'parent_id' => ['nullable', 'int', 'exists:categories,id'],
            'image' => $id == null ? 'required|image' : 'image',
            'distinctive' => 'required|in:yes,no',
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
