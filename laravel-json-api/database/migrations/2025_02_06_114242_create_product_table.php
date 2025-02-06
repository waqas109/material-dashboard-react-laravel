<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('accounts', function (Blueprint $table) {
        //     $table->id();
        //     $table->tinyInteger('account_type_id');
        //     $table->string('name');
        //     $table->string('whatsapp');
        //     $table->string('phone');
        //     $table->string(column: 'bank');
        //     $table->string('bank1');
        //     $table->string('cnic');
        //     $table->smallInteger('cr');
        //     $table->smallInteger('dr');
        //     $table->string('shop_address');
        //     $table->string('address');
        //     $table->smallInteger('user_id');
        //     $table->softDeletes();
        //     $table->timestamps();
        // });



        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('product_type_id');
            $table->string('name');
            $table->string('formula');
            $table->double('price');
            $table->double('purchase_price');
            $table->smallInteger('packing');
            $table->string('distribution');
            $table->string('company');
            $table->double('tax');
            $table->double('sales_tax');
            $table->double('percent_age');
            $table->smallInteger('user_id');
            // $table->string('whatsapp');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
