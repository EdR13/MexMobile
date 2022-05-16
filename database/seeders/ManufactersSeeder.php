<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacters')->insert(['manufacter_name' => 'Apple',]);
        DB::table('manufacters')->insert(['manufacter_name' => 'Samsung',]);
        DB::table('manufacters')->insert(['manufacter_name' => 'One Plus',]);
    }
}
