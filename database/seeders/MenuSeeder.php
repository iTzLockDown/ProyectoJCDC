<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'nombre' => 'Perfil',
            'modulo' => 1,
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);
        DB::table('menus')->insert([
            'nombre' => 'Menu',
            'modulo' => 1,
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);
        DB::table('menus')->insert([
            'nombre' => 'Modulo',
            'modulo' => 2,
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);
        DB::table('menus')->insert([
            'nombre' => 'Usuarios',
            'modulo' => 2,
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);
        DB::table('menus')->insert([
            'nombre' => 'Mantenimiento',
            'modulo' => 3,
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);
        DB::table('menus')->insert([
            'nombre' => 'Agregar',
            'modulo' => 3,
            'estado' => 1,
            'usuario_registra' => 1,
            'fecha_registra' => Carbon::now(),
        ]);
    }
}
