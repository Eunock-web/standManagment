<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestValidation extends FormRequest
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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'role' => 'required|string|max:100|enum:admin,entrepreneur_approuvé,entrepreneur_en_attente,client',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function messages(): array{
        return [
            'firstname.required' => 'Le prénom est obligatoire',
            'lastname.required' => 'Le nom est obligatoire',
            'role.required' => 'Le role est obligatoire',
            'role.enum' => 'Le role doit etre admin, entrepreneur_approuvé, entrepreneur_en_attente ou client',
            'email.required' => 'L\'email est obligatoire',
            'email.unique' => 'L\'email est deja utilise',
            'password.required' => 'Le mot de passe est obligatoire',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caracteres',
            'password.confirmed' => 'Les mots de passe doivent etre identiques',
        ];
    }
}
