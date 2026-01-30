<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'last_name' => $this->faker->lastName(),
           'first_name' => $this->faker->firstName(),
           'username' => $this->faker->unique()->userName(),
           'email' => $this->faker->unique()->safeEmail(),
           'email_verified_at' => now(),
           'password' => static::$password ??= Hash::make('password'),
           'phone_number' => $this->faker->optional()->numerify('##########'),
           'date_of_birth' => $this->faker->optional()->date(),
           'address' => $this->faker->optional()->address(),
           'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
