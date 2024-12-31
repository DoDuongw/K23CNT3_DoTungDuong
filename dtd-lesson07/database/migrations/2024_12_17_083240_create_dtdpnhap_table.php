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
        Schema::create('dtdpnhap', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();
           $table->string('dtdSoPN', 255)->primary(); // Cùng kiểu và độ dài
            $table->date('dtdNgayNhap');
            $table->string('dtdSoDH');
            //foreign
            $table->foreign('dtdSoDH')->references('dtdSoDH')->on('dtddondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtdpnhap');
    }
};
