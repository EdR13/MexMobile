<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Operative_SystemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operative_systems')->insert([
            'os_name' => 'IOS',
            'os_version' => '15',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
