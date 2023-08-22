<?php

namespace Database\Seeders;

use App\Models\Condition;
use App\Models\RentalLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conditions = [
            'Mascotas permitidas',
            'Traer muebles propios',
            'Conpartir baño sanitario',
            'Compartir la cocina',
            'Compartir ducha',
            'Compartir sala de estar',
            'Tendra servicio de wifi',
        ];
        //anwers es si la persona acepto la condiciones de arriba

        $condiciones = Condition::factory(count($conditions))->sequence(fn ($sqn) => [
            'name' => $conditions[$sqn->index]
        ])->create();

        $rentals = RentalLocation::all()->pluck('id');

        $condiciones->each(function ($condicion) use ($rentals) {
            foreach ($rentals as $rental) {
                $condicion->rental_locations()->attach([
                    $rental => ['answer' => (bool) random_int(0, 1)]
                ]);
            }
        });
    }
}
