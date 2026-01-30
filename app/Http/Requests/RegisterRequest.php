<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
        ];
    }
    public function messages(): array
    {
        return [
            'last_name.required' => 'Familiya talab qilinadi.',
            'last_name.string' => 'Familiya matn bo\'lishi kerak.',
            'last_name.max' => 'Familiya 255 ta belgidan oshmasligi kerak.',
            'first_name.required' => 'Ism talab qilinadi.',
            'first_name.string' => 'Ism matn bo\'lishi kerak.',
            'first_name.max' => 'Ism 255 ta belgidan oshmasligi kerak.',
            'username.required' => 'Foydalanuvchi nomi talab qilinadi.',
            'username.string' => 'Foydalanuvchi nomi matn bo\'lishi kerak.',
            'username.max' => 'Foydalanuvchi nomi 255 ta belgidan oshmasligi kerak.',
            'username.unique' => 'Foydalanuvchi nomi allaqachon olingan.',
            'email.required' => 'Email talab qilinadi.',
            'email.string' => 'Email matn bo\'lishi kerak.',
            'email.email' => 'Email valid email manzili bo\'lishi kerak.',
            'email.max' => 'Email 255 ta belgidan oshmasligi kerak.',
            'email.unique' => 'Email allaqachon olingan.',
            'password.required' => 'Parol talab qilinadi.',
            'password.string' => 'Parol matn bo\'lishi kerak.',
            'password.min' => 'Parol kamida 6 ta belgidan iborat bo\'lishi kerak.',
        ];
    }
}
