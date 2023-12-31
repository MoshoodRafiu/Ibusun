<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $table = request('type');
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'type' => ['required', 'string', 'in:seller,user'],
            'business_name' => ['nullable', 'string'],
            'email' => ['required', 'email', "unique:{$table}s"],
            'password' => ['required', 'confirmed'],
        ];
    }
}
