<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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
            "email" => "required|exists:users,email|email",
            "password" => "required"
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "Email tidak boleh kosong",
            "email.email" => "Format email tidak valid",
            "email.exists" => "Email tidak terdaftar",
            "password.required" => "Password tidak boleh kosong"
        ];
    }

    public function failedValidation(Validator $validator)
    {                  
        $response = redirect()
                ->route('login')
                ->with('danger', 'Oops! Data Login tidak valid')
                // ->withErrors($validator)
                ->withInput();
        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
