<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'user_name' => 'required|min:3',
            'email' => 'required|email',
        ];
    }

    public function messages()
{
    return [
        'user_name.required' => 'A filed user name is required',
        'user_name.min' => 'A filed user name is min 3 char',
        'email.required' => 'A filed email is required',
        'email.email' => 'A filed email is email',
    ];
}
}
