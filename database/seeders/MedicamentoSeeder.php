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
                'miligramos'=> 600,
                'farmacia_id'=> 1
            ],
            [
                'nombre'=> "Paracetamol",
                'miligramos'=> 1000,
                'farmacia_id'=> 2
            ],
            [
                'nombre'=> "Ilvico",
                'miligramos'=> 325,
                'farmacia_id'=> 1
            ],
        ]);

    }
}
