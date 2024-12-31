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
        Schema::create('dtdctpxuat', function (Blueprint $table) {
            $table->string('dtdSoPX', 255); // Cùng kiểu và độ dài với bảng dtdpxuat
            $table->string('dtdMaVTu');
            $table->integer('dtdSlXuat');
            $table->double('dtdDgXuat', 8, 2);
        
            // Khóa ngoại
            $table->foreign('dtdSoPX')->references('dtdSoPX')->on('dtdpxuat')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtdctpxuat');
    }
};
