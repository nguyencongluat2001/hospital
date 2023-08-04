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
        Schema::create('blood_test', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('code');
            $table->string('name',2000)->nullable();
            $table->string('form')->nullable(); // hình thức thực hiện VD tại nhà, tại viện
            $table->string('sex')->nullable();
            $table->string('age')->nullable();
            $table->string('date_created')->nullable();//ngyaf bđ
            $table->string('date_end')->nullable(); //ngày kt
            $table->string('address',1000)->nullable(); //địa chỉ
            $table->string('promotion')->nullable(); //khuyến mãi
            $table->text('decision')->nullable(); //Mô tả
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_test');
    }
};
