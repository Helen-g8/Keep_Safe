<?php

namespace Database\Factories;

use App\Models\RentalLocation;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rentalLoc = RentalLocation::all()->pluck("id");
        $studentID = Student::all()->pluck("id");

        return [
            "rental_location_id"=>$rentalLoc->random(),
            "student_id"=>$studentID->random(),
            "quantity"=>fake()->numberBetween(100, 500),
            "paid_student"=>fake()->boolean(),
            "received_landlord"=>fake()->boolean(),
        ];
    }
}
