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
        Schema::create('specialtys', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name_specialty')->nullable();
            $table->string('code');
            $table->string('avatar',2000)->nullable();
            $table->text('decision')->nullable();
            $table->string('current_status')->nullable();
            $table->string('order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialtys');
    }
};
