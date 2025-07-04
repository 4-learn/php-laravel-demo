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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();                              // 自動編號的主鍵 (id)
            $table->string('title');                  // 課程名稱，最長 255 字元
            $table->text('description')->nullable();  // 課程描述，可以是長文字，也可以不填
            $table->unsignedInteger('price');         // 價格，必須是正整數（不含小數）
            $table->string('instructor')->nullable(); // 授課講師，可以不填
            $table->timestamps();                     // 自動產生 created_at / updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
