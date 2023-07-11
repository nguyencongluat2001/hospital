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
        Schema::create('orders', function (Blueprint $table) { // Bảng đặt lịch
            $table->uuid('id');
            $table->uuid('hospital_id'); // Địa chỉ bệnh viện
            $table->uuid('doctor_id'); // Bác sĩ
            $table->string('doctor_name')->nullable(); // Tên bác sĩ
            $table->string('phone'); // Số điện thoại người đặt
            $table->string('name')->nullable(); // Tên người đặt
            $table->datetime('appointment_time')->nullable(); // Thời gian đặt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
