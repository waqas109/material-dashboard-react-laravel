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
        Schema::create('current_flocks', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            $table->smallInteger('flock_id');
            $table->smallInteger('farm_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->smallInteger('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('current_flocks');
    }
};
