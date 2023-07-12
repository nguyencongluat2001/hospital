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
        Schema::create('schedule', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code_schedule');
            $table->string('code_hospital')->nullable();
            $table->string('code_specialty')->nullable();
            $table->string('money')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('code_insurance')->nullable();
            $table->string('sex')->nullable();
            $table->string('email')->nullable();
            $table->string('date_of_brith')->nullable();
            $table->string('code_tinh',50)->nullable();
            $table->string('code_huyen',50)->nullable();
            $table->string('code_xa')->nullable();
            $table->string('address')->nullable();
            $table->string('code_introduce')->nullable();
            $table->string('reason',2000)->nullable();
            $table->string('name_image',200)->nullable();
            $table->string('status',5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
