<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updatefood_typeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'food_type_name'=>'required|max:50',
            'food_type_photo'=>'max:5120|image',
        ];
    }
}
