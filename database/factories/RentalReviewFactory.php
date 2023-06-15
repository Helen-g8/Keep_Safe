<?php

namespace Database\Factories;

use App\Models\RentalLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RentalReview>
 */
class RentalReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Rentals=RentalLocation::all()-> pluck("id");
        return [
            "stars"=> fake()->numberBetween(1,5),
            "comment" => fake()-> text(rand(50, 255)),
            "rental_location_id"=> $Rentals-> random(),
            

        ];
    }
}
