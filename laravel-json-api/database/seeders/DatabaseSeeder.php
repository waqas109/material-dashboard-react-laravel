<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UsersSeeder::class);
        $this->call(flock_seeder::class);
        $this->call(farm_seeder::class);
        $this->call(accountTypesSeeder::class);
        $this->call(accountSeeder::class);
        $this->call(currentflockSeeder::class);
        $this->call(productTypeSeeder::class);
        $this->call(productSeeder::class);
        $this->call(transectionTypeSeeder::class);
    }
}
