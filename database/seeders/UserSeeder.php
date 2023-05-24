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
            [
                'name' => "Médico6",
                'email' => "medico6@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico7",
                'email' => "medico7@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico8",
                'email' => "medico8@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico9",
                'email' => "medico9@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico10",
                'email' => "medico10@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico11",
                'email' => "medico11@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico12",
                'email' => "medico12@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico13",
                'email' => "medico13@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico14",
                'email' => "medico14@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico15",
                'email' => "medico15@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico16",
                'email' => "medico16@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico17",
                'email' => "medico17@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico18",
                'email' => "medico18@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico19",
                'email' => "medico19@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico20",
                'email' => "medico20@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico21",
                'email' => "medico21@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico22",
                'email' => "medico22@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico23",
                'email' => "medico23@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico24",
                'email' => "medico24@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico25",
                'email' => "medico25@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico26",
                'email' => "medico26@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico27",
                'email' => "medico27@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico28",
                'email' => "medico28@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico30",
                'email' => "medico30@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico31",
                'email' => "medico31@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico32",
                'email' => "medico32@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico33",
                'email' => "medico33@med.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente3",
                'email' => "paciente3@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente4",
                'email' => "paciente4@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente5",
                'email' => "paciente5@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente6",
                'email' => "paciente6@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente7",
                'email' => "paciente7@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente8",
                'email' => "paciente8@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente9",
                'email' => "paciente9@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente10",
                'email' => "paciente10@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente11",
                'email' => "paciente11@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente12",
                'email' => "paciente12@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente13",
                'email' => "paciente13@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente14",
                'email' => "paciente14@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente15",
                'email' => "paciente15@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente16",
                'email' => "paciente16@pac.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente17",
                'email' => "paciente17@pac.com",
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
