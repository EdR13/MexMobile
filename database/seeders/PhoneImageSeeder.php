<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //iPhones
        DB::table('phone_images')->insert(['image_id' => '1','phone_id' => '1',]);
        DB::table('phone_images')->insert(['image_id' => '2','phone_id' => '2',]);
        DB::table('phone_images')->insert(['image_id' => '3','phone_id' => '2',]);
        DB::table('phone_images')->insert(['image_id' => '4','phone_id' => '3',]);
        DB::table('phone_images')->insert(['image_id' => '5','phone_id' => '3',]);
        //Samsung
        DB::table('phone_images')->insert(['image_id' => '6','phone_id' => '4',]);
        DB::table('phone_images')->insert(['image_id' => '7','phone_id' => '4',]);
        DB::table('phone_images')->insert(['image_id' => '8','phone_id' => '5',]);
        DB::table('phone_images')->insert(['image_id' => '9','phone_id' => '5',]);
        DB::table('phone_images')->insert(['image_id' => '10','phone_id' => '5',]);
        //OnePlus
        DB::table('phone_images')->insert(['image_id' => '11','phone_id' => '6',]);
        DB::table('phone_images')->insert(['image_id' => '12','phone_id' => '6',]);        
    }
}
