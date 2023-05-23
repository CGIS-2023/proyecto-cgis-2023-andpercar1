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
                'medicamento_id'=> 1
            ],
            [
                'nombre'=> "Cofarme",
                'email'=> "cofarme@proveedor.com",
                'telefono'=> "954331346",
                'direccion'=> "C/ Torreblanca, 6",
                'medicamento_id'=> 2
            ],
            [
                'nombre'=> "Prosalud",
                'email'=> "prosalud@proveedor.com",
                'telefono'=> "955734249",
                'direccion'=> "C/ Lumbreras, 18",
                'medicamento_id'=> 3
            ],
            [
                'nombre'=> "Vendaje",
                'email'=> "vendaje@proveedor.com",
                'telefono'=> "944632530",
                'direccion'=> "C/ Trajano, 28",
                'medicamento_id'=> 4
            ],
            [
                'nombre'=> "Cancamo",
                'email'=> "cancamo@proveedor.com",
                'telefono'=> "955461800",
                'direccion'=> "C/ Pastor y Landero, 32",
                'medicamento_id'=> 4
            ],
            [
                'nombre'=> "Pincelado",
                'email'=> "pincelado@proveedor.com",
                'telefono'=> "954338775",
                'direccion'=> "C/ Arroyo, 20",
                'medicamento_id'=> 4
            ],
            [
                'nombre'=> "Arquillo",
                'email'=> "arquillo@proveedor.com",
                'telefono'=> "966843701",
                'direccion'=> "AV. Ingeniería, 46",
                'medicamento_id'=> 5
            ],
            [
                'nombre'=> "Visual",
                'email'=> "visual@proveedor.com",
                'telefono'=> "954331346",
                'direccion'=> "C/ Estrella Canopus, 29",
                'medicamento_id'=> 6
            ],
            [
                'nombre'=> "Caida",
                'email'=> "caida@proveedor.com",
                'telefono'=> "954337081",
                'direccion'=> "C/ Estrella Betelgeuse, 12",
                'medicamento_id'=> 7
            ],
            [
                'nombre'=> "Estacion",
                'email'=> "estacion@proveedor.com",
                'telefono'=> "955421672",
                'direccion'=> "Av. Kansas City, 49",
                'medicamento_id'=> 7
            ],
            [
                'nombre'=> "Laboratorio Medico",
                'email'=> "labmed@proveedor.com",
                'telefono'=> "958623738",
                'direccion'=> "C/ Reyes Catolicos, 1",
                'medicamento_id'=> 8
            ],
            [
                'nombre'=> "Objetos Salud",
                'email'=> "objsal@proveedor.com",
                'telefono'=> "955443986",
                'direccion'=> "C/ Arfe, 11",
                'medicamento_id'=> 8
            ],
            [
                'nombre'=> "Sobrevivir",
                'email'=> "sobrevivir@proveedor.com",
                'telefono'=> "957392038",
                'direccion'=> "C/ Adriano, 38",
                'medicamento_id'=> 9
            ],
            [
                'nombre'=> "Laboratorio Proyeccion",
                'email'=> "labproy@proveedor.com",
                'telefono'=> "992384583",
                'direccion'=> "C/ Metalurgia, 5",
                'medicamento_id'=> 10
            ],
            [
                'nombre'=> "Proveer",
                'email'=> "proveer@proveedor.com",
                'telefono'=> "955323296",
                'direccion'=> "C/ Feria, 34",
                'medicamento_id'=> 11
            ],
            [
                'nombre'=> "Laboratorio Sanidad",
                'email'=> "labsan@proveedor.com",
                'telefono'=> "950293543",
                'direccion'=> "Av. Miraflores, 36",
                'medicamento_id'=> 12
            ],
            [
                'nombre'=> "Remiro",
                'email'=> "remiro@proveedor.com",
                'telefono'=> "959348510",
                'direccion'=> "C/ Antonio Bienvenida, 15",
                'medicamento_id'=> 13
            ],
            [
                'nombre'=> "La Novena",
                'email'=> "novena@proveedor.com",
                'telefono'=> "995464719",
                'direccion'=> "C/ Jesus del Gran Poder, 6",
                'medicamento_id'=> 13
            ],
            [
                'nombre'=> "Ubicaina",
                'email'=> "ubicaina@proveedor.com",
                'telefono'=> "900542853",
                'direccion'=> "C/ Parras, 16",
                'medicamento_id'=> 14
            ],
            [
                'nombre'=> "Paz",
                'email'=> "paz@proveedor.com",
                'telefono'=> "933567123",
                'direccion'=> "Av. de la Paz, 33",
                'medicamento_id'=> 14
            ],
            [
                'nombre'=> "Lab. Omeprazol",
                'email'=> "labome@proveedor.com",
                'telefono'=> "966349523",
                'direccion'=> "C/ San Luis, 26",
                'medicamento_id'=> 15
            ],
            [
                'nombre'=> "La Receta",
                'email'=> "receta@proveedor.com",
                'telefono'=> "913485342",
                'direccion'=> "C/ Camino de los Toros, 31",
                'medicamento_id'=> 16
            ],
            [
                'nombre'=> "Codificacion Sanitaria",
                'email'=> "codsan@proveedor.com",
                'telefono'=> "905362812",
                'direccion'=> "C/ Antonio Buero Vallejo, 24",
                'medicamento_id'=> 17
            ],
            [
                'nombre'=> "Industria",
                'email'=> "industria@proveedor.com",
                'telefono'=> "938475182",
                'direccion'=> "Av. Republica Argentina",
                'medicamento_id'=> 18
            ],
            [
                'nombre'=> "Maquinaria",
                'email'=> "maquinaria@proveedor.com",
                'telefono'=> "927452372",
                'direccion'=> "Av. de la Barzola, 47",
                'medicamento_id'=> 18
            ],
            [
                'nombre'=> "Pastilla Farmaceutica",
                'email'=> "pasfarm@proveedor.com",
                'telefono'=> "938457125",
                'direccion'=> "C/ Salado, 15",
                'medicamento_id'=> 18
            ],
            [
                'nombre'=> "Laboratorio Pino",
                'email'=> "labpino@proveedor.com",
                'telefono'=> "912124565",
                'direccion'=> "C/ Marques de Esquivel, 2",
                'medicamento_id'=> 18
            ],
            [
                'nombre'=> "Pincel Sanitario",
                'email'=> "pinsan@proveedor.com",
                'telefono'=> "971247124",
                'direccion'=> "C/ Resolana",
                'medicamento_id'=> 19
            ],
            [
                'nombre'=> "Salud y Nueva Vida",
                'email'=> "salvida@proveedor.com",
                'telefono'=> "974247354",
                'direccion'=> "C/ Cuesta del Rosario, 7",
                'medicamento_id'=> 19
            ],
            [
                'nombre'=> "Farmaco",
                'email'=> "farmaco@proveedor.com",
                'telefono'=> "994824653",
                'direccion'=> "C/ Trastamara, 16",
                'medicamento_id'=> 20
            ],
            [
                'nombre'=> "Campanas Sanitarias",
                'email'=> "camsan@proveedor.com",
                'telefono'=> "967653653",
                'direccion'=> "C/ Bailen, 20",
                'medicamento_id'=> 21
            ],
            [
                'nombre'=> "Proveer Bienestar",
                'email'=> "probien@proveedor.com",
                'telefono'=> "977453109",
                'direccion'=> "C/ Becquer, 7",
                'medicamento_id'=> 22
            ],
            [
                'nombre'=> "Escritor",
                'email'=> "escritor@proveedor.com",
                'telefono'=> "913548576",
                'direccion'=> "C/ Escoberos",
                'medicamento_id'=> 22
            ],
            [
                'nombre'=> "Laboratorio Oleofarma",
                'email'=> "laboleo@proveedor.com",
                'telefono'=> "918354567",
                'direccion'=> "C/ Faustino Alvarez",
                'medicamento_id'=> 23
            ],
        ]);

        
 
    }
}
