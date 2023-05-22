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
            [
                'nombre'=> "Radamel",
                'apellidos'=> "Hidalgo Conde",
                'telefono'=> "640987215",
                'DNI'=> "28577514L",
                'farmacia_id' => 3,
                'user_id' => 9,
            ],
            [
                'nombre'=> "Rosa Maria",
                'apellidos'=> "Fernandez Valiente",
                'telefono'=> "693451210",
                'DNI'=> "48712312K",
                'farmacia_id' => 3,
                'user_id' => 10,
            ],
            [
                'nombre'=> "Alberto",
                'apellidos'=> "Perez Sanchez",
                'telefono'=> "623156789",
                'DNI'=> "51769082O",
                'farmacia_id' => 3,
                'user_id' => 11,
            ],
            [
                'nombre'=> "Roberto",
                'apellidos'=> "Garcia Losada",
                'telefono'=> "676578690",
                'DNI'=> "84211225Q",
                'farmacia_id' => 4,
                'user_id' => 12,
            ],
            [
                'nombre'=> "Angela",
                'apellidos'=> "Muñiz Ourense",
                'telefono'=> "690543478",
                'DNI'=> "49510096U",
                'farmacia_id' => 5,
                'user_id' => 13,
            ],
            [
                'nombre'=> "Benito",
                'apellidos'=> "Teran Conde",
                'telefono'=> "688908098",
                'DNI'=> "26456785T",
                'farmacia_id' => 6,
                'user_id' => 14,
            ],
            [
                'nombre'=> "David",
                'apellidos'=> "Perez de Leon",
                'telefono'=> "655150686",
                'DNI'=> "89099806E",
                'farmacia_id' => 7,
                'user_id' => 15,
            ],
            [
                'nombre'=> "Eloy",
                'apellidos'=> "Nogueras Pino",
                'telefono'=> "678094576",
                'DNI'=> "65456789R",
                'farmacia_id' => 7,
                'user_id' => 16,
            ],
            [
                'nombre'=> "Penelope",
                'apellidos'=> "Cruz Oscuro",
                'telefono'=> "690867520",
                'DNI'=> "8654789O",
                'farmacia_id' => 8,
                'user_id' => 17,
            ],
            [
                'nombre'=> "Jose Manuel",
                'apellidos'=> "Molero Gomez",
                'telefono'=> "671120932",
                'DNI'=> "09084323F",
                'farmacia_id' => 8,
                'user_id' => 18,
            ],
            [
                'nombre'=> "Marcos",
                'apellidos'=> "Rodriguez Piñones",
                'telefono'=> "678745678",
                'DNI'=> "93575121H",
                'farmacia_id' => 9,
                'user_id' => 19,
            ],
            [
                'nombre'=> "Gonzalo",
                'apellidos'=> "Falcao Castillo",
                'telefono'=> "643533432",
                'DNI'=> "67857349I",
                'farmacia_id' => 9,
                'user_id' => 20,
            ],
            [
                'nombre'=> "Ines",
                'apellidos'=> "Lerida Yun",
                'telefono'=> "677632980",
                'DNI'=> "78120528G",
                'farmacia_id' => 10,
                'user_id' => 21,
            ],
            [
                'nombre'=> "Inmaculada",
                'apellidos'=> "Caro Ruiz",
                'telefono'=> "654082767",
                'DNI'=> "78207460T",
                'farmacia_id' => 10,
                'user_id' => 22,
            ],
            [
                'nombre'=> "Mª Carmen",
                'apellidos'=> "Delgado Carrasco",
                'telefono'=> "671209657",
                'DNI'=> "84072575A",
                'farmacia_id' => 11,
                'user_id' => 23,
            ],
            [
                'nombre'=> "Antonio",
                'apellidos'=> "Lacida Yunqueras",
                'telefono'=> "671209678",
                'DNI'=> "58270981G",
                'farmacia_id' => 12,
                'user_id' => 24,
            ],
            [
                'nombre'=> "Maria",
                'apellidos'=> "Soler Oliva",
                'telefono'=> "659012974",
                'DNI'=> "27909680G",
                'farmacia_id' => 13,
                'user_id' => 25,
            ],
            [
                'nombre'=> "Pastora",
                'apellidos'=> "Carrillo Franco",
                'telefono'=> "611900654",
                'DNI'=> "90045902R",
                'farmacia_id' => 14,
                'user_id' => 26,
            ],
            [
                'nombre'=> "Ramon",
                'apellidos'=> "Castillo Mariano",
                'telefono'=> "667900578",
                'DNI'=> "623907567",
                'farmacia_id' => 14,
                'user_id' => 27,
            ],
            [
                'nombre'=> "Vida",
                'apellidos'=> "Podesta Illanguas",
                'telefono'=> "637339009",
                'DNI'=> "673990092K",
                'farmacia_id' => 15,
                'user_id' => 28,
            ],
            [
                'nombre'=> "Aaron",
                'apellidos'=> "Gonzalez Alvarez",
                'telefono'=> "655863493",
                'DNI'=> "62808134S",
                'farmacia_id' => 15,
                'user_id' => 29,
            ],
            [
                'nombre'=> "Gabriel",
                'apellidos'=> "Zurbano Espartero",
                'telefono'=> "619229092",
                'DNI'=> "67201937Y",
                'farmacia_id' => 16,
                'user_id' => 30,
            ],
            [
                'nombre'=> "Damian",
                'apellidos'=> "Ingles Haro",
                'telefono'=> "670123495",
                'DNI'=> "94204693I",
                'farmacia_id' => 17,
                'user_id' => 31,
            ],
            [
                'nombre'=> "Israel",
                'apellidos'=> "Alba Garcia",
                'telefono'=> "681903586",
                'DNI'=> "61749103H",
                'farmacia_id' => 18,
                'user_id' => 32,
            ],
            [
                'nombre'=> "Pablo",
                'apellidos'=> "Garrido Caro",
                'telefono'=> "638012385",
                'DNI'=> "72940194D",
                'farmacia_id' => 18,
                'user_id' => 33,
            ],
            [
                'nombre'=> "Esperanza",
                'apellidos'=> "Ramos Gudelj",
                'telefono'=> "671290375",
                'DNI'=> "74914912N",
                'farmacia_id' => 19,
                'user_id' => 34,
            ],
            [
                'nombre'=> "Rocio",
                'apellidos'=> "Fajardo Velarde",
                'telefono'=> "612789219",
                'DNI'=> "71391023B",
                'farmacia_id' => 19,
                'user_id' => 35,
            ],

        ]);
    }
}
