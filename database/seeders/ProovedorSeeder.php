<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProovedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('proovedors')->insert([
            [
                'nombre'=> "Abundance and Health",
                'email'=> "a&h@proovedor.com",
                'telefono'=> 954636748,
                'direccion'=> 'Av de la Palmera, 30',
                'medicamento_id'=>null
            ],
            [
                'nombre'=> "Laboratorios Ubiopharma",
                'email'=> "lab_ubi@proovedor.com",
                'telefono'=> 954331346,
                'direccion'=> "C/ Muñoz León, 16",
                'medicamento_id'=>null
            ],
            [
                'nombre'=> "Cofarme",
                'email'=> "cofarme@proovedor.com",
                'telefono'=> 954331346,
                'direccion'=> "C/ Muñoz León, 16",
                'medicamento_id'=>null
            ],
        ]);

    }
}
