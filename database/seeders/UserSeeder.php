<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Administrador",
                'email' => "administrador@admin.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Medico",
                'email' => "medico@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente",
                'email' => "paciente@pac.com",
                'password' => Hash::make('12345678'),
            ],
        ])
    }
}
