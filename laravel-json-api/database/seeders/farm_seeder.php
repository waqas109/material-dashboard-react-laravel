<?php

namespace Database\Seeders;

use App\Models\farm;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class farm_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            farm::create([
                'name' => 'Farm_' . $i, // Generate a name dynamically (optional)
                'phone' => '0300',
                'address' => 'sargodha',
                'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
                'created_at' => Carbon::now(), // Current timestamp for created_at
                'updated_at' => Carbon::now(), // Current timestamp for updated_at
            ]);
        }
    }
}
