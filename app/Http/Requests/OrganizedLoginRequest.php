<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizedLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'rule' => 'required|string|in:user',
            'email' => 'required|email',
             'password' => [
                'required'
            ],
        ];
    }
    public function messages()
    {
        return [
            'rule.required' => 'Role filed is required',
            'rule.string' => 'Role should be string', 
            'rule.in' => 'Role should be "user"',
            'email.required' => 'email filed is required',
            'passowrd.required' => 'password filed is required',
        ];
}
}
