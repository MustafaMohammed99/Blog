<?php

namespace App\Http\Requests;

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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->route('post');

        return [
            'category_id' => ['required', 'int', 'exists:categories,id'],
            'title' =>  ['required', 'string', 'min:3', 'max:255',],
            'description' =>  ['required', 'string',],
            'image' => $id == null ? 'required|image' : 'image',
        ];
    }
}
