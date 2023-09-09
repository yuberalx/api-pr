<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LugarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name_lugar' => 'required|max:255|min:3'
        ];
    }
}
