<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert(['name' => 'Apple',]);
        DB::table('manufacturers')->insert(['name' => 'Samsung',]);
        DB::table('manufacturers')->insert(['name' => 'One Plus',]);
    }
}
