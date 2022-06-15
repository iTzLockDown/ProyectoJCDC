<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulos')->insert([
            'nombre' => 'Modulo',
            'icono' => 'fa fa-',
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);

        DB::table('modulos')->insert([
            'nombre' => 'Perfil',
            'icono' => 'fa fa-',
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);

        DB::table('modulos')->insert([
            'nombre' => 'Menu',
            'icono' => 'fa fa-',
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);

        DB::table('modulos')->insert([
            'nombre' => 'Usuarios',
            'icono' => 'fa fa-',
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);
    }
}
