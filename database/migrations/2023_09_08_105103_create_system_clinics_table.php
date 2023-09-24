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
        Schema::create('system_clinics', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code_hospital')->nullable(); // mã bệnh viện phòng khám
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->text('time')->nullable();//thời gian khám
            $table->string('specialtys')->nullable(); //chuyên khoa
            $table->string('money')->nullable(); //phí khám
            $table->string('image')->nullable(); //phí khám
            $table->text('profile')->nullable(); //tiểu sử
            $table->string('order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_clinics');
    }
};
