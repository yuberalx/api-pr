<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lugar;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lugar::create([
            'id' => 1,
            'name_lugar' => 'USA'
        ]);

        Lugar::create([
            'id' => 2,
            'name_lugar' => 'RUSIA'
        ]);

        Lugar::create([
            'id' => 3,
            'name_lugar' => 'JAPON'
        ]);
    }
}
