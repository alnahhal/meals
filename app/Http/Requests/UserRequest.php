<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        return [
            'name' => ['required','string', 'max:20','regex:/^[a-zA-Z]+(\s[a-zA-Z]+)?$/u'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore($this->user), 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'password' => ['required','min:8', 'regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@$!%*?&])/'],
            'phone' => ['required', 'numeric', Rule::unique('users')->ignore($this->user), 'digits:11'],
            'address' => 'required',
        ];
    }

    public function messages(): array
{
    return [
        'password.regex' => 'Min length should be 8 and must include at least 1 uppercase, 1 lowercase and 1 special character',
    ];
}

}
