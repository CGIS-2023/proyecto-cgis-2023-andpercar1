<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recetas')->insert([
            [
                'descripcion' => "Tomar 2 veces al día",
                'fecha' => '2023-01-23',
                'sanitario_id' => 1
            ],
            [
                'descripcion' => "Dolores de cabeza",
                'fecha' => '2023-02-02',
                'sanitario_id' => 2
            ],
        
        ]);
    }
}
