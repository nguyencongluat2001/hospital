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
        Schema::create('service_at_home', function (Blueprint $table) {
            $table->uuid('id')->primary();
            
            $table->string('code'); // mã lấy xet nghiệm
            $table->string('name')->nullable();
            $table->string('phone')->nullable(); // số điện thoại
            $table->string('type')->nullable();  // loại xét nghiệm
            $table->string('sex')->nullable();  // giới tính

            $table->datetime('date_sampling')->nullable(); // ngày lấy mẫu
            $table->string('hour_sampling')->nullable(); // giờ lấy mẫu

            $table->string('address')->nullable();  // địa chỉ
            $table->string('reason',2000)->nullable();  // nội dung yêu cầu
            $table->string('status',5)->nullable();  // trạng thái đặt lịch

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_at_home');
    }
};
