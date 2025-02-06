<?php

namespace Database\Seeders;

use App\Models\productType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class productTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        productType::create([
            'name' => 'Medicine', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        productType::create([
            'name' => 'Veccine', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        productType::create([
            'name' => 'Feeds', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        productType::create([
            'name' => 'Surgical', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        productType::create([
            'name' => 'Nutracuticle', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        productType::create([
            'name' => 'Genral Item', // Generate a name dynamically (optional)
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        // productType::create([
        //     'name' => 'Net Cash', // Generate a name dynamically (optional)
        //     'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
        //     'created_at' => Carbon::now(), // Current timestamp for created_at
        //     'updated_at' => Carbon::now(), // Current timestamp for updated_at
        // ]);
    }
}
