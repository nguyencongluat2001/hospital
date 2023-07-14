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
        Schema::create('customers_care', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('phone')->nullable();
            $table->string('question')->nullable();
            $table->string('reply')->nullable();
            $table->tinyInteger('view')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_care');
    }
};
