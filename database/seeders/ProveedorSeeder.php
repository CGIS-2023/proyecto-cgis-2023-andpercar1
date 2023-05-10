<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('proveedors')->insert([
            [
                'nombre'=> "Abundance and Health",
                'email'=> "a&h@proveedor.com",
                'telefono'=> "954636748",
                'direccion'=> "Av de la Palmera, 30",
                'medicamento_id'=> 1
            ],
            [
                'nombre'=> "Laboratorios Ubiopharma",
                'email'=> "lab_ubi@proveedor.com",
                'telefono'=> "954331346",
                'direccion'=> "C/ Muñoz León, 16",
                'medicamento_id'=> 2
            ],
            [
                'nombre'=> "Cofarme",
                'email'=> "cofarme@proveedor.com",
                'telefono'=> "954331346",
                'direccion'=> "C/ Muñoz León, 16",
                'medicamento_id'=> 3
            ],
        ]);

        
 
    }
}
