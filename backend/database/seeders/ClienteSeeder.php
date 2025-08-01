<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'nombres' => 'KHYABETH ANDREA',
            'apellidos' => 'MOYA PACHECO',
            'direccion' => '6 de agosto y rodriguez',
            'celular' => '60798765',
            'nit' => '231231230',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('clientes')->insert([
            'nombres' => 'MARIA RUTH',
            'apellidos' => 'CHOQUE QUISPE',
            'direccion' => 'Potosi y Leon',
            'celular' => '77665589',
            'nit' => '302192910',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
