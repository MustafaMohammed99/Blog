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
        $id = $this->route('user');
        return [
            'name' => [
                'required', 'string', 'min:3', 'max:255',
                Rule::unique('users', 'name')->ignore($id),
            ],
            'email' => 'required|email',
            'type' => 'required|in:admin,user',
            'password'=>'required|sometimes'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'This name is already exists!',
        ];
    }
}
