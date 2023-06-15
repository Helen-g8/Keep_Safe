<?php

namespace Database\Factories;

use App\Models\RentalLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rule>
 */
class RuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rentals=RentalLocation::all()->pluck("id");
        return [
            "rule"=>fake()->text(rand(50,255)),
            "rental_location_id"=>$rentals->random(),
        ];
    }
}
