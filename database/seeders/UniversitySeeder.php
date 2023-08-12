<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universities = [
'Universidad de El Salvador (UES) - Campus Ahuachapán',
'Universidad Francisco Gavidia (UFG) - Campus Sensuntepeque',
'Universidad Nacional de El Salvador (UNSA) - Campus Chalatenango',
'Universidad Don Bosco (UDB) - Campus Cuscatlán',
'Universidad de El Salvador (UES) - Campus Santa Tecla',
'Universidad Dr. José Matías Delgado (UMG) - Campus Santa Tecla',
'Universidad Francisco Gavidia (UFG) - Campus Santa Tecla',
'Universidad de El Salvador (UES) - Campus San Luis Talpa',
'Universidad Nacional de El Salvador (UNSA) - Campus Zacatecoluca',
'Universidad de El Salvador (UES) - Campus La Unión',
'Universidad de El Salvador (UES) - Campus San Francisco Gotera',
'Universidad de El Salvador (UES) - Campus San Miguel',
'Universidad Gerardo Barrios (UGB) - Campus San Miguel',
'Universidad de El Salvador (UES) - Campus San Salvador',
'Universidad Centroamericana "José Simeón Cañas" (UCA)',
'Universidad Tecnológica de El Salvador (UTEC)',
'Universidad Dr. José Matías Delgado (UMG) - Campus San Salvador',
'Universidad Francisco Gavidia (UFG) - Campus San Salvador',
'Universidad Tecnológica (UTEC) - Campus San Salvador',
'Universidad de El Salvador (UES) - Campus San Vicente',
'Universidad de El Salvador (UES) - Campus Santa Ana',
'Universidad Católica de El Salvador (UNICAES) - Campus Santa Ana',
'Universidad Tecnológica de El Salvador (UTEC) - Campus Santa Ana',
'Universidad de El Salvador (UES) - Campus Sonsonate',
'Universidad Tecnológica de El Salvador (UTEC) - Campus Sonsonate',
'Universidad de El Salvador (UES) - Campus Usulután',
        ];

        University::factory(count($universities))->sequence(fn ($sqn) => [
            'name' => $universities[$sqn->index]
        ])->create();


    }
}
