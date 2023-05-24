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
                'miligramos'=> 725
            ],
            [
                'nombre'=> "Lizipaina",
                'miligramos'=> 500
            ],
            [
                'nombre'=> "Aspirina",
                'miligramos'=> 500
            ],
            [
                'nombre'=> "Fortasec",
                'miligramos'=> 150
            ],
            [
                'nombre'=> "Metamizol",
                'miligramos'=> 275
            ],
            [
                'nombre'=> "Amoxicilina",
                'miligramos'=> 325
            ],
            [
                'nombre'=> "Tramadol",
                'miligramos'=> 500
            ],
            [
                'nombre'=> "Traumell",
                'miligramos'=> 1000
            ],
            [
                'nombre'=> "Betadine",
                'miligramos'=> 575
            ],
            [
                'nombre'=> "Lidocaina",
                'miligramos'=> 1000
            ],
            [
                'nombre'=> "Valium",
                'miligramos'=> 250
            ],
            [
                'nombre'=> "Omeprazol",
                'miligramos'=> 350
            ],
            [
                'nombre'=> "Almax",
                'miligramos'=> 425
            ],
            [
                'nombre'=> "Benadon",
                'miligramos'=> 125
            ],
            [
                'nombre'=> "Lorazepan",
                'miligramos'=> 500
            ],
            [
                'nombre'=> "Diazepan",
                'miligramos'=> 500
            ],
            [
                'nombre'=> "Leracetina",
                'miligramos'=> 225
            ],
            [
                'nombre'=> "Nolotil",
                'miligramos'=> 750
            ],
            [
                'nombre'=> "Enantyum",
                'miligramos'=> 500
            ],
            [
                'nombre'=> "Rinoebastel",
                'miligramos'=> 325
            ],
        ]);

    }
}
