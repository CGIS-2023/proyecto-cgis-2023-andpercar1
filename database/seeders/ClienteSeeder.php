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
                'telefono' => "609178573",
                'num_seguridadsocial' => "110130116410",
                'direccion' => "C/Torres,58",
                'user_id' => 7,
            ],
            [
                'nombre' => "Manuel",
                'apellidos' => "Granados Suarez",
                'DNI' => "08516873N",
                'telefono' => "684534234",
                'num_seguridadsocial' => "419143228611",
                'direccion' => "C/Relator,14",
                'user_id' => 8,
            ],
            [
                'nombre' => "Jose Antonio",
                'apellidos' => "Ruiz Gijon",
                'DNI' => "63920195J",
                'telefono' => "628038857",
                'num_seguridadsocial' => "419143543611",
                'direccion' => "C/Reina Mercedes, 7",
                'user_id' => 36,
            ],
            [
                'nombre' => "Jose Luis",
                'apellidos' => "Mendilibar Bilbao",
                'DNI' => "75279165U",
                'telefono' => "613647460",
                'num_seguridadsocial' => "419143228531",
                'direccion' => "C/Marques de Paradas,10",
                'user_id' => 37,
            ],
            [
                'nombre' => "Ivan",
                'apellidos' => "Romero Laguarda",
                'DNI' => "40907366W",
                'telefono' => "657773100",
                'num_seguridadsocial' => "419177858611",
                'direccion' => "C/Torneo,19",
                'user_id' => 38,
            ],
            [
                'nombre' => "Miguel",
                'apellidos' => "Prieto Lopez",
                'DNI' => "66460472R",
                'telefono' => "648610495",
                'num_seguridadsocial' => "419143244645",
                'direccion' => "C/Leon XIII, 6",
                'user_id' => 39,
            ],
            [
                'nombre' => "Paula",
                'apellidos' => "Aguilar Poveda",
                'DNI' => "39611074Y",
                'telefono' => "655531873E",
                'num_seguridadsocial' => "418045228611",
                'direccion' => "C/Carretera de Carmona, 49",
                'user_id' => 40,
            ],
            [
                'nombre' => "Teresa",
                'apellidos' => "Ortiz Lagares",
                'DNI' => "57581023U",
                'telefono' => "613734190",
                'num_seguridadsocial' => "419864709611",
                'direccion' => "C/Torreblanca, 17",
                'user_id' => 41,
            ],
            [
                'nombre' => "Judit",
                'apellidos' => "Vazquez Cabral",
                'DNI' => "39512600G",
                'telefono' => "676990845",
                'num_seguridadsocial' => "419148450062",
                'direccion' => "C/San Juan de Ribera, 18",
                'user_id' => 42,
            ],
            [
                'nombre' => "Francisco Javier",
                'apellidos' => "Sanchez Garcia",
                'DNI' => "40048611H",
                'telefono' => "610938466",
                'num_seguridadsocial' => "415513748611",
                'direccion' => "Av. Sanchez Pizjuan,5",
                'user_id' => 43,
            ],
            [
                'nombre' => "Margarita",
                'apellidos' => "Perez Galindo",
                'DNI' => "66612399I",
                'telefono' => "612217485",
                'num_seguridadsocial' => "512693228611",
                'direccion' => "Av. de la Raza, 28",
                'user_id' => 44,
            ],
            [
                'nombre' => "Marcos",
                'apellidos' => "Narbona Hidalgo",
                'DNI' => "58004763A",
                'telefono' => "648571094",
                'num_seguridadsocial' => "512341309611",
                'direccion' => "C/ Felipe II, 10",
                'user_id' => 45,
            ],
            [
                'nombre' => "Rafael",
                'apellidos' => "Marcos Ubeda",
                'DNI' => "65517450K",
                'telefono' => "613714912",
                'num_seguridadsocial' => "512913427111",
                'direccion' => "C/ Don Fadrique, 42",
                'user_id' => 46,
            ],
            [
                'nombre' => "Pablo",
                'apellidos' => "Cuenca Flores",
                'DNI' => "61293401U",
                'telefono' => "612104394",
                'num_seguridadsocial' => "412096228611",
                'direccion' => "C/ Bogotá, 17",
                'user_id' => 47,
            ],
            [
                'nombre' => "Fatima",
                'apellidos' => "Garcia Pelaez",
                'DNI' => "28610934K",
                'telefono' => "619270492",
                'num_seguridadsocial' => "512519228611",
                'direccion' => "C/ Pepe Luis Vazquez, 73",
                'user_id' => 48,
            ],
            [
                'nombre' => "Lucia",
                'apellidos' => "Melo Castellano",
                'DNI' => "81264107T",
                'telefono' => "612945718",
                'num_seguridadsocial' => "416209228611",
                'direccion' => "C/ Espartero, 18",
                'user_id' => 49,
            ],
            [
                'nombre' => "Julia",
                'apellidos' => "Oliva Rastrojo",
                'DNI' => "51280471H",
                'telefono' => "71231210",
                'num_seguridadsocial' => "410928428611",
                'direccion' => "C/ Matahacas, 9",
                'user_id' => 50,
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
