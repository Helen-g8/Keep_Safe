<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StatesTownsDistrictsSeeder::class,
            RoleSeeder::class,
            SexSeeder::class,
            UniversitySeeder::class,
            UserSeeder::class,
            UserReviewSeeder::class,
            StudentSeeder::class,
            RentalLocationSeeder::class,
            ConditionSeeder::class,
            ServiceSeeder::class,
            RentalReviewSeeder::class,
            RuleSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}
