<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\TorneoSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TenistaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TorneoSeeder::class);
    }
}
