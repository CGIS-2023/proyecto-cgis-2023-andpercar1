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
            [
                'nombre' => "Pandora",
                'telefono' => 954266378,
                'abierto' => 1
            ],
            [
                'nombre' => "Pastillero",
                'telefono' => 954688809,
                'abierto' => 1
            ],
            [
                'nombre' => "Las Pajanosas Farmaceutica",
                'telefono' => 954072134,
                'abierto' => 0
            ],
            [
                'nombre' => "Rosalia",
                'telefono' => 954655032,
                'abierto' => 1
            ],
            [
                'nombre' => "La manzana",
                'telefono' => 954109076,
                'abierto' => 0
            ],
            [
                'nombre' => "Sanitario",
                'telefono' => 954395222,
                'abierto' => 1
            ],
            [
                'nombre' => "Caro",
                'telefono' => 956899800,
                'abierto' => 1
            ],
            [
                'nombre' => "Cruz Verde",
                'telefono' => 954300096,
                'abierto' => 1
            ],
            [
                'nombre' => "Farmacias Moreno",
                'telefono' => 954674555,
                'abierto' => 1
            ],
            [
                'nombre' => "El Estanco",
                'telefono' => 967890098,
                'abierto' => 0
            ],
            [
                'nombre' => "Los cuñaos",
                'telefono' => 965345611,
                'abierto' => 1
            ],
            [
                'nombre' => "La galería",
                'telefono' => 955678423,
                'abierto' => 1
            ],
            [
                'nombre' => "El juanlu",
                'telefono' => 954098944,
                'abierto' => 1
            ],
            [
                'nombre' => "Farmaceutica Pino Montano",
                'telefono' => 954321384,
                'abierto' => 0
            ],
            [
                'nombre' => "Virgen Macarena",
                'telefono' => 954334569,
                'abierto' => 1
            ],
            [
                'nombre' => "Virgen de la Salud",
                'telefono' => 954321110,
                'abierto' => 1
            ],
            [
                'nombre' => "Aclimatador",
                'telefono' => 954345090,
                'abierto' => 0
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
                'farmacia_id' => 1,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "003",
                'farmacia_id' => 1,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "004",
                'farmacia_id' => 1,
                'medicamento_id' => 4,
                
            ],
            [
                'codigo_stock' => "005",
                'farmacia_id' => 1,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "006",
                'farmacia_id' => 1,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "007",
                'farmacia_id' => 1,
                'medicamento_id' => 11,
                
            ],
            [
                'codigo_stock' => "008",
                'farmacia_id' => 1,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "009",
                'farmacia_id' => 1,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "010",
                'farmacia_id' => 1,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "011",
                'farmacia_id' => 2,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "012",
                'farmacia_id' => 2,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "013",
                'farmacia_id' => 2,
                'medicamento_id' => 4,
                
            ],
            [
                'codigo_stock' => "014",
                'farmacia_id' => 2,
                'medicamento_id' => 6,
                
            ],
            [
                'codigo_stock' => "015",
                'farmacia_id' => 2,
                'medicamento_id' => 7,
                
            ],
            [
                'codigo_stock' => "016",
                'farmacia_id' => 2,
                'medicamento_id' => 8,
                
            ],
            [
                'codigo_stock' => "017",
                'farmacia_id' => 2,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "018",
                'farmacia_id' => 2,
                'medicamento_id' => 11,
                
            ],
            [
                'codigo_stock' => "019",
                'farmacia_id' => 2,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "020",
                'farmacia_id' => 2,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "021",
                'farmacia_id' => 2,
                'medicamento_id' => 14,
                
            ],
            [
                'codigo_stock' => "022",
                'farmacia_id' => 2,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "023",
                'farmacia_id' => 2,
                'medicamento_id' => 17,
                
            ],
            [
                'codigo_stock' => "024",
                'farmacia_id' => 2,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "025",
                'farmacia_id' => 2,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "026",
                'farmacia_id' => 2,
                'medicamento_id' => 21,
                
            ],
            [
                'codigo_stock' => "027",
                'farmacia_id' => 2,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "028",
                'farmacia_id' => 2,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "029",
                'farmacia_id' => 3,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "030",
                'farmacia_id' => 3,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "031",
                'farmacia_id' => 3,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "032",
                'farmacia_id' => 3,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "033",
                'farmacia_id' => 3,
                'medicamento_id' => 6,
                
            ],
            [
                'codigo_stock' => "034",
                'farmacia_id' => 3,
                'medicamento_id' => 7,
                
            ],
            [
                'codigo_stock' => "035",
                'farmacia_id' => 3,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "036",
                'farmacia_id' => 3,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "037",
                'farmacia_id' => 3,
                'medicamento_id' => 14,
                
            ],
            [
                'codigo_stock' => "038",
                'farmacia_id' => 3,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "039",
                'farmacia_id' => 3,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "040",
                'farmacia_id' => 3,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "041",
                'farmacia_id' => 4,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "042",
                'farmacia_id' => 4,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "043",
                'farmacia_id' => 4,
                'medicamento_id' => 4,
                
            ],
            [
                'codigo_stock' => "044",
                'farmacia_id' => 4,
                'medicamento_id' => 8,
                
            ],
            [
                'codigo_stock' => "045",
                'farmacia_id' => 4,
                'medicamento_id' => 10,
                
            ],
            [
                'codigo_stock' => "046",
                'farmacia_id' => 4,
                'medicamento_id' => 11,
                
            ],
            [
                'codigo_stock' => "047",
                'farmacia_id' => 4,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "048",
                'farmacia_id' => 4,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "049",
                'farmacia_id' => 4,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "050",
                'farmacia_id' => 4,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "051",
                'farmacia_id' => 5,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "052",
                'farmacia_id' => 5,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "053",
                'farmacia_id' => 5,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "054",
                'farmacia_id' => 5,
                'medicamento_id' => 8,
                
            ],
            [
                'codigo_stock' => "055",
                'farmacia_id' => 5,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "056",
                'farmacia_id' => 5,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "057",
                'farmacia_id' => 5,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "058",
                'farmacia_id' => 5,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "059",
                'farmacia_id' => 5,
                'medicamento_id' => 17,
                
            ],
            [
                'codigo_stock' => "060",
                'farmacia_id' => 5,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "061",
                'farmacia_id' => 5,
                'medicamento_id' => 21,
                
            ],
            [
                'codigo_stock' => "062",
                'farmacia_id' => 5,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "063",
                'farmacia_id' => 6,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "064",
                'farmacia_id' => 6,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "065",
                'farmacia_id' => 6,
                'medicamento_id' => 7,
                
            ],
            [
                'codigo_stock' => "066",
                'farmacia_id' => 6,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "067",
                'farmacia_id' => 6,
                'medicamento_id' => 10,
                
            ],
            [
                'codigo_stock' => "068",
                'farmacia_id' => 6,
                'medicamento_id' => 11,
                
            ],
            [
                'codigo_stock' => "069",
                'farmacia_id' => 6,
                'medicamento_id' => 14,
                
            ],
            [
                'codigo_stock' => "070",
                'farmacia_id' => 6,
                'medicamento_id' => 17,
                
            ],
            [
                'codigo_stock' => "071",
                'farmacia_id' => 6,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "072",
                'farmacia_id' => 6,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "073",
                'farmacia_id' => 6,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "074",
                'farmacia_id' => 7,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "075",
                'farmacia_id' => 7,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "076",
                'farmacia_id' => 7,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "077",
                'farmacia_id' => 7,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "078",
                'farmacia_id' => 8,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "079",
                'farmacia_id' => 8,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "080",
                'farmacia_id' => 8,
                'medicamento_id' => 4,
                
            ],
            [
                'codigo_stock' => "081",
                'farmacia_id' => 8,
                'medicamento_id' => 8,
                
            ],
            [
                'codigo_stock' => "082",
                'farmacia_id' => 8,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "083",
                'farmacia_id' => 8,
                'medicamento_id' => 10,
                
            ],
            [
                'codigo_stock' => "084",
                'farmacia_id' => 8,
                'medicamento_id' => 11,
                
            ],
            [
                'codigo_stock' => "085",
                'farmacia_id' => 8,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "086",
                'farmacia_id' => 8,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "087",
                'farmacia_id' => 8,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "088",
                'farmacia_id' => 8,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "089",
                'farmacia_id' => 8,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "090",
                'farmacia_id' => 8,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "091",
                'farmacia_id' => 8,
                'medicamento_id' => 21,
                
            ],
            [
                'codigo_stock' => "092",
                'farmacia_id' => 8,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "093",
                'farmacia_id' => 8,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "094",
                'farmacia_id' => 9,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "095",
                'farmacia_id' => 9,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "096",
                'farmacia_id' => 9,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "097",
                'farmacia_id' => 9,
                'medicamento_id' => 6,
                
            ],
            [
                'codigo_stock' => "098",
                'farmacia_id' => 9,
                'medicamento_id' => 7,
                
            ],
            [
                'codigo_stock' => "099",
                'farmacia_id' => 9,
                'medicamento_id' => 10,
                
            ],
            [
                'codigo_stock' => "100",
                'farmacia_id' => 9,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "101",
                'farmacia_id' => 9,
                'medicamento_id' => 14,
                
            ],
            [
                'codigo_stock' => "102",
                'farmacia_id' => 9,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "103",
                'farmacia_id' => 9,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "104",
                'farmacia_id' => 9,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "105",
                'farmacia_id' => 9,
                'medicamento_id' => 21,
                
            ],
            [
                'codigo_stock' => "106",
                'farmacia_id' => 9,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "107",
                'farmacia_id' => 10,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "108",
                'farmacia_id' => 10,
                'medicamento_id' => 4,
                
            ],
            [
                'codigo_stock' => "109",
                'farmacia_id' => 10,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "110",
                'farmacia_id' => 10,
                'medicamento_id' => 6,
                
            ],
            [
                'codigo_stock' => "111",
                'farmacia_id' => 10,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "112",
                'farmacia_id' => 10,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "113",
                'farmacia_id' => 10,
                'medicamento_id' => 14,
                
            ],
            [
                'codigo_stock' => "114",
                'farmacia_id' => 10,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "115",
                'farmacia_id' => 10,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "116",
                'farmacia_id' => 10,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "117",
                'farmacia_id' => 10,
                'medicamento_id' => 21,
                
            ],
            [
                'codigo_stock' => "118",
                'farmacia_id' => 10,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "119",
                'farmacia_id' => 11,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "120",
                'farmacia_id' => 11,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "121",
                'farmacia_id' => 11,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "122",
                'farmacia_id' => 11,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "123",
                'farmacia_id' => 11,
                'medicamento_id' => 10,
                
            ],
            [
                'codigo_stock' => "124",
                'farmacia_id' => 11,
                'medicamento_id' => 17,
                
            ],
            [
                'codigo_stock' => "125",
                'farmacia_id' => 11,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "126",
                'farmacia_id' => 11,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "127",
                'farmacia_id' => 11,
                'medicamento_id' => 21,
                
            ],
            [
                'codigo_stock' => "128",
                'farmacia_id' => 11,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "129",
                'farmacia_id' => 11,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "130",
                'farmacia_id' => 12,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "131",
                'farmacia_id' => 12,
                'medicamento_id' => 6,
                
            ],
            [
                'codigo_stock' => "132",
                'farmacia_id' => 12,
                'medicamento_id' => 8,
                
            ],
            [
                'codigo_stock' => "133",
                'farmacia_id' => 12,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "134",
                'farmacia_id' => 12,
                'medicamento_id' => 10,
                
            ],
            [
                'codigo_stock' => "135",
                'farmacia_id' => 12,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "136",
                'farmacia_id' => 12,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "137",
                'farmacia_id' => 12,
                'medicamento_id' => 14,
                
            ],
            [
                'codigo_stock' => "138",
                'farmacia_id' => 12,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "139",
                'farmacia_id' => 12,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "140",
                'farmacia_id' => 12,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "141",
                'farmacia_id' => 13,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "142",
                'farmacia_id' => 13,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "143",
                'farmacia_id' => 13,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "144",
                'farmacia_id' => 13,
                'medicamento_id' => 4,
                
            ],
            [
                'codigo_stock' => "145",
                'farmacia_id' => 13,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "146",
                'farmacia_id' => 13,
                'medicamento_id' => 7,
                
            ],
            [
                'codigo_stock' => "147",
                'farmacia_id' => 13,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "148",
                'farmacia_id' => 13,
                'medicamento_id' => 11,
                
            ],
            [
                'codigo_stock' => "149",
                'farmacia_id' => 13,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "150",
                'farmacia_id' => 13,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "151",
                'farmacia_id' => 13,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "152",
                'farmacia_id' => 13,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "153",
                'farmacia_id' => 13,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "154",
                'farmacia_id' => 13,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "155",
                'farmacia_id' => 13,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "156",
                'farmacia_id' => 14,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "157",
                'farmacia_id' => 14,
                'medicamento_id' => 7,
                
            ],
            [
                'codigo_stock' => "158",
                'farmacia_id' => 14,
                'medicamento_id' => 8,
                
            ],
            [
                'codigo_stock' => "159",
                'farmacia_id' => 14,
                'medicamento_id' => 11,
                
            ],
            [
                'codigo_stock' => "160",
                'farmacia_id' => 14,
                'medicamento_id' => 17,
                
            ],
            [
                'codigo_stock' => "161",
                'farmacia_id' => 14,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "162",
                'farmacia_id' => 14,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "163",
                'farmacia_id' => 14,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "164",
                'farmacia_id' => 14,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "165",
                'farmacia_id' => 14,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "166",
                'farmacia_id' => 15,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "167",
                'farmacia_id' => 15,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "168",
                'farmacia_id' => 15,
                'medicamento_id' => 4,
                
            ],
            [
                'codigo_stock' => "169",
                'farmacia_id' => 15,
                'medicamento_id' => 6,
                
            ],
            [
                'codigo_stock' => "170",
                'farmacia_id' => 15,
                'medicamento_id' => 8,
                
            ],
            [
                'codigo_stock' => "171",
                'farmacia_id' => 15,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "172",
                'farmacia_id' => 15,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "173",
                'farmacia_id' => 15,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "174",
                'farmacia_id' => 15,
                'medicamento_id' => 14,
                
            ],
            [
                'codigo_stock' => "175",
                'farmacia_id' => 15,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "176",
                'farmacia_id' => 15,
                'medicamento_id' => 17,
                
            ],
            [
                'codigo_stock' => "177",
                'farmacia_id' => 15,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "178",
                'farmacia_id' => 15,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "179",
                'farmacia_id' => 15,
                'medicamento_id' => 21,
                
            ],
            [
                'codigo_stock' => "180",
                'farmacia_id' => 15,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "181",
                'farmacia_id' => 16,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "182",
                'farmacia_id' => 16,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "183",
                'farmacia_id' => 16,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "184",
                'farmacia_id' => 16,
                'medicamento_id' => 6,
                
            ],
            [
                'codigo_stock' => "185",
                'farmacia_id' => 16,
                'medicamento_id' => 8,
                
            ],
            [
                'codigo_stock' => "186",
                'farmacia_id' => 16,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "187",
                'farmacia_id' => 16,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "188",
                'farmacia_id' => 16,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "189",
                'farmacia_id' => 16,
                'medicamento_id' => 17,
                
            ],
            [
                'codigo_stock' => "190",
                'farmacia_id' => 16,
                'medicamento_id' => 18,
                
            ],
            [
                'codigo_stock' => "191",
                'farmacia_id' => 16,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "192",
                'farmacia_id' => 16,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "193",
                'farmacia_id' => 16,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "194",
                'farmacia_id' => 16,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "195",
                'farmacia_id' => 17,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "196",
                'farmacia_id' => 17,
                'medicamento_id' => 4,
                
            ],
            [
                'codigo_stock' => "197",
                'farmacia_id' => 17,
                'medicamento_id' => 5,
                
            ],
            [
                'codigo_stock' => "198",
                'farmacia_id' => 17,
                'medicamento_id' => 6,
                
            ],
            [
                'codigo_stock' => "199",
                'farmacia_id' => 17,
                'medicamento_id' => 7,
                
            ],
            [
                'codigo_stock' => "200",
                'farmacia_id' => 17,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "201",
                'farmacia_id' => 17,
                'medicamento_id' => 10,
                
            ],
            [
                'codigo_stock' => "202",
                'farmacia_id' => 17,
                'medicamento_id' => 11,
                
            ],
            [
                'codigo_stock' => "203",
                'farmacia_id' => 17,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "204",
                'farmacia_id' => 17,
                'medicamento_id' => 14,
                
            ],
            [
                'codigo_stock' => "205",
                'farmacia_id' => 17,
                'medicamento_id' => 16,
                
            ],
            [
                'codigo_stock' => "206",
                'farmacia_id' => 17,
                'medicamento_id' => 17,
                
            ],
            [
                'codigo_stock' => "207",
                'farmacia_id' => 17,
                'medicamento_id' => 19,
                
            ],
            [
                'codigo_stock' => "208",
                'farmacia_id' => 17,
                'medicamento_id' => 21,
                
            ],
            [
                'codigo_stock' => "209",
                'farmacia_id' => 17,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "210",
                'farmacia_id' => 17,
                'medicamento_id' => 23,
                
            ],
            [
                'codigo_stock' => "211",
                'farmacia_id' => 18,
                'medicamento_id' => 1,
                
            ],
            [
                'codigo_stock' => "212",
                'farmacia_id' => 18,
                'medicamento_id' => 2,
                
            ],
            [
                'codigo_stock' => "213",
                'farmacia_id' => 18,
                'medicamento_id' => 3,
                
            ],
            [
                'codigo_stock' => "214",
                'farmacia_id' => 18,
                'medicamento_id' => 7,
                
            ],
            [
                'codigo_stock' => "215",
                'farmacia_id' => 18,
                'medicamento_id' => 9,
                
            ],
            [
                'codigo_stock' => "216",
                'farmacia_id' => 18,
                'medicamento_id' => 12,
                
            ],
            [
                'codigo_stock' => "217",
                'farmacia_id' => 18,
                'medicamento_id' => 13,
                
            ],
            [
                'codigo_stock' => "218",
                'farmacia_id' => 18,
                'medicamento_id' => 15,
                
            ],
            [
                'codigo_stock' => "219",
                'farmacia_id' => 18,
                'medicamento_id' => 20,
                
            ],
            [
                'codigo_stock' => "220",
                'farmacia_id' => 18,
                'medicamento_id' => 22,
                
            ],
            [
                'codigo_stock' => "221",
                'farmacia_id' => 19,
                'medicamento_id' => 2,
            ],
            [
                'codigo_stock' => "222",
                'farmacia_id' => 19,
                'medicamento_id' => 3,
            ],
            [
                'codigo_stock' => "223",
                'farmacia_id' => 19,
                'medicamento_id' => 5,
            ],
            [
                'codigo_stock' => "224",
                'farmacia_id' => 19,
                'medicamento_id' => 6,
            ],
            [
                'codigo_stock' => "225",
                'farmacia_id' => 19,
                'medicamento_id' => 8,
            ],
            [
                'codigo_stock' => "226",
                'farmacia_id' => 19,
                'medicamento_id' => 9,
            ],
            [
                'codigo_stock' => "227",
                'farmacia_id' => 19,
                'medicamento_id' => 10,
            ],
            [
                'codigo_stock' => "228",
                'farmacia_id' => 19,
                'medicamento_id' => 11,
            ],
            [
                'codigo_stock' => "229",
                'farmacia_id' => 19,
                'medicamento_id' => 14,
            ],
            [
                'codigo_stock' => "230",
                'farmacia_id' => 19,
                'medicamento_id' => 18,
            ],
            [
                'codigo_stock' => "231",
                'farmacia_id' => 19,
                'medicamento_id' => 19,
            ],
            [
                'codigo_stock' => "232",
                'farmacia_id' => 19,
                'medicamento_id' => 20,
            ],
            [
                'codigo_stock' => "233",
                'farmacia_id' => 19,
                'medicamento_id' => 21,
            ],
            [
                'codigo_stock' => "234",
                'farmacia_id' => 19,
                'medicamento_id' => 22,
            ],
            [
                'codigo_stock' => "235",
                'farmacia_id' => 19,
                'medicamento_id' => 23,
            ],
        ]);

        
    }
}
