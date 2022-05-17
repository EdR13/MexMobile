<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ManufacturersSeeder::class,
            ColorsSeeder::class,
            Operative_SystemsSeeder::class,
            PhonesSeeder::class
        ]);
        
    }
}
