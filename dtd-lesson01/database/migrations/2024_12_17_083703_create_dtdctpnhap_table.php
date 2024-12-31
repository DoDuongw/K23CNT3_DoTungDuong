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
        Schema::create('dtdctpnhap', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();
           $table->string('dtdSoPN', 255); // Cùng kiểu và độ dài với bảng dtdpxuat
           $table->string('dtdMaVTu');
           $table->integer('dtdSlNhap');
           $table->double('dtdDgNhap', 8, 2);
           $table->foreign('dtdSoPN')->references('dtdSoPN')->on('dtdpNHAP')->onDelete('cascade');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtdctpnhap');
    }
};
