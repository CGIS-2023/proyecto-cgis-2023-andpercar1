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
                'miligramos'=> 600
            ],
            [
                'nombre'=> "Paracetamol",
                'miligramos'=> 1000
            ],
            [
                'nombre'=> "Naproxeno",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Simvastatina",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Lizipaina",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Aspirina",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Fortasec",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Metamizol",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Amoxicilina",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Tramadol",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Traumell",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Betadine",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Lidocaina",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Valium",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Omeprazol",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Almax",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Benadon",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Lorazepan",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Diazepan",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Leracetina",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Nolotil",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Enantyum",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Rinoebastel",
                'miligramos'=> 325
            ],
        ]);

    }
}
