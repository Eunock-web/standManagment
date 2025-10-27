<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequestValidation extends FormRequest
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
            'name'=>'required|string|max:255',
            'description'=>'required|text',
            'statuts'=>'required|enum:pending,approved,refused',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array{
        return [
            'name.required' => 'Le nom est obligatoire',
            'description.required' => 'La description est obligatoire',
            'image.mimes' => 'L\'image doit etre au format jpeg, png, jpg, gif, svg',
            'image.max' => 'L\'image doit etre inferieur a 2048Ko',
        ];
    }
}
