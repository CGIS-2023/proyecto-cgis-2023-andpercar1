<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FarmaciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farmacias')->insert([
            [
                'nombre' => "Farmasalud",
                'telefono' => "954667453",
                'abierto' => 1
            ],
            [
                'nombre' => "Botiquín",
                'telefono' => "954098943",
                'abierto' => 1
            ],
            [
                'nombre' => "Vitalidad",
                'telefono' => "954800562",
                'abierto' => 0
            ],
        ]);

        
    }
}
