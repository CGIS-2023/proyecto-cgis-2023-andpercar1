<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'telefono' => 954667453,
                'abierto' => 1
            ],
            [
                'nombre' => "Botiquín",
                'telefono' => 954098943,
                'abierto' => 1
            ],
        
        ]);

        DB::table('farmacia_proveedor')->insert([
            [
                'fecha_pedido' => "2023-01-22",
                'farmacia_id' => 1,
                'proveedor_id' => 1,
                
            ],
            [
                'fecha_pedido' => "2023-02-05",
                'farmacia_id' => 2,
                'proveedor_id' => 2,
                
            ],

        ]);

        DB::table('farmacia_medicamento')->insert([
            [
                'codigo_stock' => "001",
                'farmacia_id' => 1,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "002",
                'farmacia_id' => 2,
                'medicamento_id' => 2,
                
            ],

        ]);

        
    }
}
