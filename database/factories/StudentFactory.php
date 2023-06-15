<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\University;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user=User::all()->pluck("id");
        $districts=District::all()->pluck("id");
        $universities=University::all()->pluck("id");
        return [
            "user_id"=>$user->random(),
            "carnet"=>fake()->randomNumber(8, true),
            "district_id"=>$districts->random(),
            "address"=>fake()->streetAddress(),
            "university_id"=>$universities->random(),
        ];
    }
}
