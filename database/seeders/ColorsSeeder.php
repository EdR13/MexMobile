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
        DB::table('colors')->insert(['color' => 'Black',]);
        DB::table('colors')->insert(['color' => 'White',]);
        DB::table('colors')->insert(['color' => 'Blue',]);
        DB::table('colors')->insert(['color' => 'Green',]);
        DB::table('colors')->insert(['color' => 'Red',]);
        DB::table('colors')->insert(['color' => 'Gray',]);
        DB::table('colors')->insert(['color' => 'Silver',]);
        DB::table('colors')->insert(['color' => 'Gold',]);
        DB::table('colors')->insert(['color' => 'Pink',]);
    }
}
