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
            'Universidad de El Salvador',
        ];

        University::factory(count($universities))->sequence(fn ($sqn) => [
            'name' => $universities[$sqn->index]
        ])->create();
    }
}
