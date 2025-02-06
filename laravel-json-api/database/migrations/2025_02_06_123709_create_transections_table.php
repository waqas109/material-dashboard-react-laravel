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
        Schema::create('transections', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('transection_type_id');
            $table->smallInteger('account_id');
            $table->date('date')->nullable();
            $table->mediumInteger('credit')->default('0')->nullable();
            $table->mediumInteger('debit')->default('0')->nullable();
            $table->smallInteger('current_flock_id')->default('0')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transections');
    }
};
