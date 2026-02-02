<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'username' => 'admin',
            'address' => 'Admin Address',
            'phone_number' => 1234567890,
            'date_of_birth' => '1990-01-01',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'),
            'role' => 1,
        ]);


        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'username' => 'johndoe',
            'address' => '123 Main St',
            'phone_number' => 9876543210,
            'date_of_birth' => '1992-02-02',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role' => 2,
        ]);


}
}
