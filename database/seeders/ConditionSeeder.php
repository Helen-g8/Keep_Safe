<?php

namespace Database\Seeders;

use App\Models\Condition;
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
        ];

        Condition::factory(count($conditions))->sequence(fn ($sqn) => [
            'name' => $conditions[$sqn->index]
        ])->create();
    }
}
