<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|string',
            'password' => 'required|string|min:3|max:8',
        ];
    }
    public function messages(): array
    {
        return [
            'username.required' => 'Foydalanuvchi nomi talab qilinadi.',
            'username.string' => 'Foydalanuvchi nomi matn bo\'lishi kerak.',
            'password.required' => 'Parol talab qilinadi.',
            'password.string' => 'Parol matn bo\'lishi kerak.',
            'password.min' => 'Parol kamida 3 ta belgidan iborat bo\'lishi kerak.',
            'password.max' => 'Parol 8 ta belgidan oshmasligi kerak.',
        ];
    }
}
