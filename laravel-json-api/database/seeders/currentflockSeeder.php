<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\currentFlock;
use Illuminate\Support\Carbon;

class currentflockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 10; $i++) {
            currentFlock::create([
                'flock_id' => $i, // Generate a name dynamically (optional)
                'farm_id' => $i,
                'start_date' => Carbon::now()->toDateString(),
                'end_date' => null,
                'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
                'created_at' => Carbon::now(), // Current timestamp for created_at
                'updated_at' => Carbon::now(), // Current timestamp for updated_at
            ]);
        }
    }
}
