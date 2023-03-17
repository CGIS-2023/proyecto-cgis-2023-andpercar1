<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('medicamentos')->insert([
            [
                'nombre'=> "Ibuprofeno",
                'precio'=> 23.15,
                'marca'=> "Apirofeno",
                'fecha_caducidad'=> "2024-01-01"
            ],
            [
                'nombre'=> "Paracetamol",
                'precio'=> 21.99,
                'marca'=> "Panadol",
                'fecha_caducidad'=> "2024-05-20"
            ],
            [
                'nombre'=> "Ilvico",
                'precio'=> "19.99",
                'marca'=> "Aristo",
                'fecha_caducidad'=> "2025-02-18"
            ],
        ]);

    }
}
