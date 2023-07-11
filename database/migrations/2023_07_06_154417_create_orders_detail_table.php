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
        Schema::create('orders_detail', function (Blueprint $table) { // Chi tiết
            $table->uuid('id');
            $table->uuid('order_id'); // Id đặt lịch
            $table->string('patient_phone')->nullable(); // Số điện thoại người bệnh
            $table->string('patient_name')->nullable(); // Tên người bệnh
            $table->string('gender')->nullable(); // Giới tính
            $table->string('birthDate')->nullable(); // Ngày sinh
            $table->string('city')->nullable(); // Tỉnh/Thành
            $table->string('district')->nullable(); // Quận/Huyện
            $table->string('ward')->nullable(); // Xã/Phường/TT
            $table->string('address')->nullable(); // Địa chỉ
            $table->string('note')->nullable(); // Lý do khám
            $table->string('fee')->nullable(); // Chi phí khám
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_detail');
    }
};
