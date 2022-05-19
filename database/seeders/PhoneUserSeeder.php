<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhoneUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PhoneUser::factory(10)->create();
    }
}
