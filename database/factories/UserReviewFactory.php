<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserReview>
 */
class UserReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all()->pluck('id');

        return [
            'stars' => fake()->numberBetween(1, 5),
            'comment'=> fake()->text(rand(25, 255)),
            'user_id' => $users->random(),
        ];
    }
}
