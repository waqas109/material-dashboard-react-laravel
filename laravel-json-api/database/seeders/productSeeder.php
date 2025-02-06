<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::create('products', function (Blueprint $table) {
        //     $table->id();
        //     $table->tinyInteger('product_type_id');
        //     $table->string('name');
        //     $table->string('formula');
        //     $table->double('price');
        //     $table->double('purchase_price');
        //     $table->tinyInteger('packing');
        //     $table->string('distribution');
        //     $table->string('company');
        //     $table->double('tax');
        //     $table->double('sales_tax');
        //     $table->double('percent_age');
        //     // $table->string('whatsapp');
        //     $table->softDeletes();
        //     $table->timestamps();
        // });
        product::create([
            'product_type_id' => 1,
            'name' => 'Panadol 500mg Tablet', // Generate a name dynamically (optional)
            'formula' => 'Paracetamol',
            'price' => '700',
            'purchase_price' => '595',
            'packing' => '100',
            'distribution' => '11',
            'company' => '11',
            'tax' => '0',
            'sales_tax' => '0',
            'percent_age' => '15',
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        product::create([
            'product_type_id' => 1,
            'name' => 'Brufon 500mg Tablet', // Generate a name dynamically (optional)
            'formula' => 'Ibubrufon',
            'price' => '210',
            'purchase_price' => '178.5',
            'packing' => '30',
            'distribution' => '11',
            'company' => '11',
            'tax' => '0',
            'sales_tax' => '0',
            'percent_age' => '15',
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
        product::create([
            'product_type_id' => 1,
            'name' => 'Flagyl 400mg Tablet', // Generate a name dynamically (optional)
            'formula' => 'Mertonidazole',
            'price' => '1000',
            'purchase_price' => '850',
            'packing' => '200',
            'distribution' => '11',
            'company' => '11',
            'tax' => '0',
            'sales_tax' => '0',
            'percent_age' => '15',
            'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
            'created_at' => Carbon::now(), // Current timestamp for created_at
            'updated_at' => Carbon::now(), // Current timestamp for updated_at
        ]);
    }
}
