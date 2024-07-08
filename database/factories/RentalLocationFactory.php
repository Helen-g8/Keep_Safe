<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Town;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RentalLocation>
 */
class RentalLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->pluck("id");
        $districts = District::all()->pluck("id");
        return [
            "user_id"=>$user->random(),
            "rooms"=>fake()->numberBetween(0, 9),
            'coordinates' => fake()->latitude() . fake()->longitude(),
            "district_id" => $districts->random(),
            "address" => fake()->streetAddress(),
            "price" =>fake()->numberBetween(75,500),
        ];
    }
}
