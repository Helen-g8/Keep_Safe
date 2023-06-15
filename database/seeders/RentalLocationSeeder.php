<?php

namespace Database\Seeders;

use App\Models\RentalLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    RentalLocation::factory(20)->create();
    }
}
