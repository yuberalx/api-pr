<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonajeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255|min:3',
            'age' => 'required|max:3|min:1'
        ];
    }
}
