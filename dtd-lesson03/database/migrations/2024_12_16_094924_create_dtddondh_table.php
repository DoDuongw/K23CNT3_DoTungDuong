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
        Schema::create('dtddondh', function (Blueprint $table) {
      // $table->id
      $table->string('dtdSoDH')->primary();
      $table->date('dtdNgayDH')->unique();
      $table->string('dtdMaNCC');
      $table->foreign('dtdMaNCC')->references('dtdMaNCC')->on('dtdnhacc');
      //$table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtddondh');
    }
};
