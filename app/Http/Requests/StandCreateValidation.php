<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StandCreateValidation extends FormRequest
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
            'name' => 'required | string | max:255 | min:20',
            'description' => 'required | text ',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048 ',
            'price' => 'required | decimal ' ,
            'user_id' => 'required | exists:users,id' ,
            'product_id' => 'required | exists:products,id ',
            'event_id' => 'required | exists:events,id '

        ];
    }
}
