<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

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
            'manufacturer_id' => '1',
            'color_id' => '8',
            'os_id' => '1',
            'model' => 'A2641',
            'name' => 'iPhone 13 Pro Max',
            'storage' => '512',
            'ram' => '6',
            'battery' => '4352',
            'fiveg_capable' => '1',
            'release_year' => '2021',
            'price' => '37000',
        ]);

        DB::table('phones')->insert([
            'manufacturer_id' => '1',
            'color_id' => '1',
            'os_id' => '3',
            'model' => 'A2411',
            'name' => 'iPhone 12 Pro Max',
            'storage' => '512',
            'ram' => '6',
            'battery' => '3687',
            'fiveg_capable' => '1',
            'release_year' => '2020',
            'price' => '28500',
        ]);

        DB::table('phones')->insert([
            'manufacturer_id' => '1',
            'color_id' => '7',
            'os_id' => '4',
            'model' => 'A2215',
            'name' => 'iPhone 11 Pro Max',
            'storage' => '512',
            'ram' => '4',
            'battery' => '3969',
            'fiveg_capable' => '0',
            'release_year' => '2019',
            'price' => '31950',
        ]);

        DB::table('phones')->insert([
            'manufacturer_id' => '2',
            'color_id' => '3',
            'os_id' => '6',
            'model' => 'SM-A536ELBELTM',
            'name' => 'Galaxy A53 5G',
            'storage' => '128',
            'ram' => '6',
            'battery' => '5000',
            'fiveg_capable' => '1',
            'release_year' => '2022',
            'price' => '9499',
        ]);

        DB::table('phones')->insert([
            'manufacturer_id' => '2',
            'color_id' => '4',
            'os_id' => '5',
            'model' => 'SM-S901EZGMLTM',
            'name' => 'Galaxy S22',
            'storage' => '256',
            'ram' => '8',
            'battery' => '3700',
            'fiveg_capable' => '1',
            'release_year' => '2021',
            'price' => '23999',
        ]);

        DB::table('phones')->insert([
            'manufacturer_id' => '3',
            'color_id' => '4',
            'os_id' => '5',
            'model' => 'NE2213',
            'name' => 'OnePlus Nord 10 Pro 5G',
            'storage' => '256',
            'ram' => '12',
            'battery' => '5000',
            'fiveg_capable' => '1',
            'release_year' => '2022',
            'price' => '23999',
        ]);
    }
}


