<?php

namespace Database\Seeders;

use App\Models\RentalLocation;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            'Water service',
            'WiFi service',
            'TV service',
            'Electricity service',
        ];
        //anwers es si la persona acepto la condiciones de arriba

        $servicios = Service::factory(count($services))->sequence(fn ($sqn) => [
            'name' => $services[$sqn->index]
        ])->create();

        $rentals = RentalLocation::all()->pluck('id');

        $servicios->each(function ($condicion) use ($rentals) {
            foreach ($rentals as $rental) {
                $condicion->rental_locations()->attach([
                    $rental => ['answer' => (bool) random_int(0, 1)]
                ]);
            }
        });
    }
}
