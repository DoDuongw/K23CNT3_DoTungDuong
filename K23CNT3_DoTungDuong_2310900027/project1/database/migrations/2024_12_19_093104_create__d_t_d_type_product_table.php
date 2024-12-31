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
        Schema::create('DTD_Type_Product', function (Blueprint $table) {
            $table->id();
            $table->string('dtdMaLoai',255)->unique();
            $table->string('dtdTenLoai',255);
            $table->tinyInteger('dtdStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTD_Type_Product');
    }
};

