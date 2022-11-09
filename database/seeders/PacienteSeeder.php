<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use League\CommonMark\Extension\Table\Table;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [       
                'nombres' => 'Uriel',
                'apellidos' => 'Cayetano Hernandez',
                'edad' => '25',
                'sexo' => 'Masculino',
                'rfc' => 'UCH270397HC1',
                'telefono' => '7223414988',
                'correo' => 'al221510804@gmail.com',
                'direccion' => 'Toluca sa diego',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'nombres' => 'Jose',
                'apellidos' => 'Perez',
                'edad' => '25',
                'sexo' => 'Masculino',
                'rfc' => 'ACL270397HC1',
                'telefono' => '1234567899',
                'correo' => 'al212510804@gmail.com',
                'direccion' => 'luca sa diego',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ]);
    }
}
