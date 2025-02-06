<?php

namespace Database\Seeders;

use App\Models\accountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class accountTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        accountType::create([
            'name' => 'Farms', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        accountType::create([
            'name' => 'Dealer', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        accountType::create([
            'name' => 'Feeds', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        accountType::create([
            'name' => 'Banks', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        accountType::create([
            'name' => 'Net Cr/Dr', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        accountType::create([
            'name' => 'Farm Expenses', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        accountType::create([
            'name' => 'Net Cash', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
    }
}
