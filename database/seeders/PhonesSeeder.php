<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            //'manufacter' => '1',
            //'color' => '1',
            //'os' => '1',
            'model' => 'Iphone 13',
            'name' => 'Iphone 13 Pro Max',
            'storage' => '256',
            'ram' => '4',
            'batery' => '4352',
            '5g_capable' => '1',
            'release_year' => '2021',
            'precio' => '23999',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
