<?php

namespace Database\Seeders;

use App\Models\flock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class flock_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // flock::create([
        //     'name' => $flock_id,
        //     'user_id' => NULL,
        //     // 'password' => 'secret'
        // ]);
        for ($i = 1; $i <= 100; $i++) {
            flock::create([
                'name' => 'flock_' . $i, // Generate a name dynamically (optional)
                'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
                'created_at' => Carbon::now(), // Current timestamp for created_at
                'updated_at' => Carbon::now(), // Current timestamp for updated_at
            ]);
        }
    }
}
