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
        Schema::create('dtdpxuat', function (Blueprint $table) {
            $table->string('dtdSoPX', 255)->primary(); // Cùng kiểu và độ dài
            $table->date('dtdNgayXuat');
            $table->string('dtdTenKH', 100);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtdpxuat');
    }
};
