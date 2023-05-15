<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'name' => "Médico1",
                'email' => "medico1@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico2",
                'email' => "medico2@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico3",
                'email' => "medico3@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico4",
                'email' => "medico4@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico5",
                'email' => "medico5@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente1",
                'email' => "paciente1@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente2",
                'email' => "paciente2@pac.com",
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
