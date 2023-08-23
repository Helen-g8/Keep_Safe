<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'alexis.navidad2024@poma.superate.org.sv',
            'role_id' => 2
        ]);

        User::factory()->create([
            'email' => 'arrendador@example.com',
            'role_id' => 1
        ]);

        User::factory(4)->create();
    }
}
