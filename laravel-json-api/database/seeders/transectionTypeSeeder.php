<?php

namespace Database\Seeders;

use App\Models\transectionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class transectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        transectionType::create([
            'name' => 'Account Opening', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        transectionType::create([
            'name' => 'Sales', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        transectionType::create([
            'name' => 'Purchases', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        transectionType::create([
            'name' => 'Recoveries', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        transectionType::create([
            'name' => 'Payments', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        transectionType::create([
            'name' => 'Expenses', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
    }
}
