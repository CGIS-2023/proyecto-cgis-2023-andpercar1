<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SanitarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sanitarios')->insert([
            [
                'nombre'=> "Jose Manuel",
                'apellidos'=> "Palazon Rodriguez",
                'telefono'=> "675546101",
                'DNI'=> "78654513P",
                'farmacia_id' => 1,
                'user_id' => 2,
            ],
            [
                'nombre'=> "Antonio Maria",
                'apellidos'=> "Roman Guerrero",
                'telefono'=> "756120967",
                'DNI'=> "67243221L",
                'farmacia_id' => 1,
                'user_id' => 3,
            ],
            [
                'nombre'=> "Jose Luis",
                'apellidos'=> "Caro Muñoz",
                'telefono'=> "648670090",
                'DNI'=> "69097634H",
                'farmacia_id' => 1,
                'user_id' => 4,
            ],
            [
                'nombre'=> "Rosario",
                'apellidos'=> "Lopez Bermudez",
                'telefono'=> "688120967",
                'DNI'=> "76678093O",
                'farmacia_id' => 2,
                'user_id' => 5,
            ],
            [
                'nombre'=> "Manuel Jesus",
                'apellidos'=> "Beltran Vazquez",
                'telefono'=> "690455420",
                'DNI'=> "49510967M",
                'farmacia_id' => 2,
                'user_id' => 6,
            ],

        ]);
    }
}
