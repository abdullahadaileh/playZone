<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            sport_typeSeeder::class,
            field_typeSeeder::class,
            fieldSeeder::class,
            bookingSeeder::class,
            opening_hoursSeeder::class,
        ]);
    }
}
