<?php

namespace Database\Seeders;

use App\Models\District;
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
            [
                'district' => 'Ahuachapán',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus Ahuachapán'
                ]
            ],

            [
                'state' => 'Cabañas',
                'name' => [
                    'Universidad Francisco Gavidia (UFG) - Campus Sensuntepeque',
                ]
            ],

            [
                'state' => 'Chalatenango',
                'name' => [
                    'Universidad Nacional de El Salvador (UNSA) - Campus Chalatenango'
                ]
            ],

            [
                'state' => 'Cuscatlán',
                'name' => [
                    'Universidad Don Bosco (UDB) - Campus Cuscatlán'
                ]
            ],

            [
                'state' => 'La Libertad',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus Santa Tecla',
                    'Universidad Dr. José Matías Delgado (UMG) - Campus Santa Tecla',
                    'Universidad Francisco Gavidia (UFG) - Campus Santa Tecla',
                    'Escuela Superior de Economia y Negocios (ESEN)',
                    'Universidad Albert Einstein',
                    'Escuela de comunicación Mónica Herrera',
                ]
            ],

            [
                'state' => 'La Paz',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus San Luis Talpa',
                    'Universidad Nacional de El Salvador (UNSA) - Campus Zacatecoluca',
                ],
            ],

            [
                'state' => 'La Unión',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus La Unión',
                ]
            ],

            [
                'state' => 'Morazán',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus San Francisco Gotera',
                ]
            ],

            [
                'state' => 'San Salvador',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus San Salvador',
                    'Universidad Centroamericana "José Simeón Cañas" (UCA)',
                    'Universidad Tecnológica de El Salvador (UTEC)',
                    'Universidad Dr. José Matías Delgado (UMG) - Campus San Salvador',
                    'Universidad Francisco Gavidia (UFG) - Campus San Salvador',
                    'Universidad Tecnológica (UTEC) - Campus San Salvador', 
                    'Escuela de Aviación Aerotraining', 
                    'Universidad Nueva San Salvador',   
                    'Universidad Cristiana de las Asambleas de Dios',
                    'Universidad Politécnica de El Salvador',
                    'Universidad Andrés Bello',
                    'Universidad Andrés Bello - Campus 2',
                    'INCAE Business School',
                ]
            ],

            [
                'state' => 'San Miguel',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus San Miguel',
                    'Universidad Gerardo Barrios (UGB) - Campus San Miguel',
                    'Universidad de Oriente',
                ]
                ],

            [
                'state' => 'San Vicente',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus San Vicente',
                ]
            ],

            [
                'state' => 'Santa Ana',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus Santa Ana',
                    'Universidad Católica de El Salvador (UNICAES) - Campus Santa Ana',
                    'Universidad Tecnológica de El Salvador (UTEC) - Campus Santa Ana', 
                    'Universidad Autónoma de Santa Ana',       
                ]
            ],

            [
                'state' => 'Sonsonate',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus Sonsonate',
                    'Universidad Tecnológica de El Salvador (UTEC) - Campus Sonsonate',
                ]
            ],

            [
                'state' => 'Usulután',
                'name' => [
                    'Universidad de El Salvador (UES) - Campus Usulután',
                ]
            ],


        ];


        foreach ($universities as $universitiesarray) {
            $district = District::where('name', $universitiesarray['district'])->first()->id;
            
            $universitiesnames = $universitiesarray['name'];
            University::factory(count($universitiesnames))->sequence(fn($sqn) => [
                'name' => $universitiesnames[$sqn->index],
                'district_id' => $district
            ])->create();
        }


    }
}