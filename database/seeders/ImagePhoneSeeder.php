<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagePhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //iPhones
        DB::table('image_phones')->insert(['image_id' => '1','phone_id' => '1',]);
        DB::table('image_phones')->insert(['image_id' => '2','phone_id' => '2',]);
        DB::table('image_phones')->insert(['image_id' => '3','phone_id' => '2',]);
        DB::table('image_phones')->insert(['image_id' => '4','phone_id' => '3',]);
        DB::table('image_phones')->insert(['image_id' => '5','phone_id' => '3',]);
        //Samsung
        DB::table('image_phones')->insert(['image_id' => '6','phone_id' => '4',]);
        DB::table('image_phones')->insert(['image_id' => '7','phone_id' => '4',]);
        DB::table('image_phones')->insert(['image_id' => '8','phone_id' => '5',]);
        DB::table('image_phones')->insert(['image_id' => '9','phone_id' => '5',]);
        DB::table('image_phones')->insert(['image_id' => '10','phone_id' => '5',]);
        //OnePlus
        DB::table('image_phones')->insert(['image_id' => '11','phone_id' => '6',]);
        DB::table('image_phones')->insert(['image_id' => '12','phone_id' => '6',]);        
    }
}
