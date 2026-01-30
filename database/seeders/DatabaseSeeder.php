<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

        User::factory()->create([
            'last_name' => 'Test',
            'first_name' => 'User',
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
            'phone_number' => '1234567890',
            'date_of_birth' => '1990-01-01',
            'address' => '123 Test St, Test City, TS 12345',
            'remember_token' => \Illuminate\Support\Str::random(10),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),



        ]);
    }
}
