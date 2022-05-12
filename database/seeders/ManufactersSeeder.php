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
        DB::table('manufacters')->insert([
            'manufacter_name' => 'Apple',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
