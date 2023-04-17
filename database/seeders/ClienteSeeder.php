<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'nombre' => "Jose",
                'apellidos' => "Fernandez Herrera",
                'DNI' => "29546772L",
                'telefono' => 609178573,
                'num_seguridadsocial' => 110130116410,
                'direccion' => "C/Torres,58"
                
            ],
            [
                'nombre' => "Manuel",
                'apellidos' => "Granados Suarez",
                'DNI' => "08516873N",
                'telefono' => 684534234,
                'num_seguridadsocial' => 419143228611,
                'direccion' => "C/Relator,14"
            ],
            ]);

            DB::table('cliente_farmacia')->insert([
                [
                    'codigo_paciente' => 00001,
                    'cliente_id' => 1,
                    'farmacia_id' => 1,
                    
                ],
                [
                    'codigo_paciente' => 00002,
                    'cliente_id' => 2,
                    'farmacia_id' => 2,
                    
                ],

            ]);

    }
}
