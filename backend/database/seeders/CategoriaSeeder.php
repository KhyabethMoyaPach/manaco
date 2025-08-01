<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar registros a la tabla
        DB::table('categorias')->insert([
            'nombre' => 'Calzados de varón',
            'descripcion' => 'Calzados de varón',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Calzados de mujer',
            'descripcion' => 'Calzados de mujer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
