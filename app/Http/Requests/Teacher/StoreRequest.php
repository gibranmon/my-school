<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'last_name' => 'required|min:5|max:50',
            'phone_number' => 'required|min:10|max:10',
            'professional_license' => 'required|max:8|unique:teachers',
            'email' => 'required|email|unique:teachers',
            'line_one' => 'required|min:5|max:50',
            'postal_code' => 'required|min:5|max:5',
            'state' => 'required|min:5|max:50'
        ];
    }
}
