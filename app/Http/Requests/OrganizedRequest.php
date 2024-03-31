<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as Password_rule;
use Illuminate\Passport\Facades\Auth;
class OrganizedRequest extends FormRequest
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
            'name' => 'required|max:55|string',
            'rule' => 'required|string|in:user',
            'phone' => 'required|digits:10',
            'email' => 'required|unique:users|email',
             'password' => [
                'required',
                'confirmed',
                Password_rule::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name filed is required',
            'name.max' => 'Name should be less than 55 charecters',
            'name.string' => 'Name should be string',
            'rule.required' => 'Role filed is required',
            'rule.string' => 'Role should be string', 
            'rule.in' => 'Role should be "user"',
            'phone.required' => 'Phone filed is required',
            'phone.digits' => 'Phone should be 12 number',
            'email.required' => 'email filed is required',
            'passowrd.required' => 'password filed is required',
        ];
}

}