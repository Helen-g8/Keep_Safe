<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Sex;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sexes = Sex::all()->pluck('id');
        $role = Role::all()->pluck('id');

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'sex_id' => $sexes->random(),
            'age' => fake()->numberBetween(18, 60),
            'dui' => fake()->randomNumber(9, true),
            'phone' => fake()->randomNumber(8, true),
            'email' => fake()->unique()->safeEmail(),
            'role_id' => $role->random(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
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
