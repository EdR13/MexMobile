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
        //iOS
        DB::table('operative_systems')->insert(['os_name' => 'iOS','os_version' => '15',]);
        DB::table('operative_systems')->insert(['os_name' => 'iOS','os_version' => '14.1',]);
        DB::table('operative_systems')->insert(['os_name' => 'iOS','os_version' => '13.4',]);
        DB::table('operative_systems')->insert(['os_name' => 'iOS','os_version' => '13',]);

        //Android
        DB::table('operative_systems')->insert(['os_name' => 'Android','os_version' => '12.1',]);
        DB::table('operative_systems')->insert(['os_name' => 'Android','os_version' => '12',]);
        DB::table('operative_systems')->insert(['os_name' => 'Android','os_version' => '11',]);
        DB::table('operative_systems')->insert(['os_name' => 'Android','os_version' => '10',]);

    }
}
