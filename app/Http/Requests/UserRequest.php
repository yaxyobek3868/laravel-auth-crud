<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $user = $this->route('user')->id ?? null;

        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' ,
            'email' => 'required|string|email|max:255|unique:users,email,' ,
            'password' => $this->isMethod('post') ? 'required|string|min:8' : 'nullable|string|min:8',
            'phone_number' => 'nullable|string|max:15',
            'date_of_birth' => 'required|date',
            'address' => 'nullable|string|max:500',
        ];
    }
    public function messages(): array
    {
        return [
            'first_name.required' => 'Ism talab qilinadi.',
            'first_name.string' => 'Ism matn bo\'lishi kerak.',
            'first_name.max' => 'Ism 255 ta belgidan oshmasligi kerak.',
            'last_name.required' => 'Familiya talab qilinadi.',
            'last_name.string' => 'Familiya matn bo\'lishi kerak.',
            'last_name.max' => 'Familiya 255 ta belgidan oshmasligi kerak.',
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
            'password.min' => 'Parol kamida 8 ta belgidan iborat bo\'lishi kerak.',
            'phone_number.string' => 'Telefon raqami matn bo\'lishi kerak.',
            'phone_number.max' => 'Telefon raqami 15 ta belgidan oshmasligi kerak.',
            'date_of_birth.required' => 'Tug\'ilgan sana talab qilinadi.',
            'date_of_birth.date' => 'Tug\'ilgan sana valid sana bo\'lishi kerak.',
            'address.string' => 'Manzil matn bo\'lishi kerak.',
            'address.max' => 'Manzil 500 ta belgidan oshmasligi kerak.',
        ];
    }
}
