<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert(['color' => 'Negro',]);
        DB::table('colors')->insert(['color' => 'Blanco',]);
        DB::table('colors')->insert(['color' => 'Azul',]);
        DB::table('colors')->insert(['color' => 'Verde',]);
        DB::table('colors')->insert(['color' => 'Rojo',]);
        DB::table('colors')->insert(['color' => 'Gris',]);
        DB::table('colors')->insert(['color' => 'Plata',]);
        DB::table('colors')->insert(['color' => 'Oro',]);
        DB::table('colors')->insert(['color' => 'Rosa',]);
    }
}
