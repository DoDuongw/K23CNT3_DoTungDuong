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
        Schema::create('DTD_Details_Bills', function (Blueprint $table) {
            $table->id();
            $table->string('dtdIDBills')->references('id')->on('DTD_Bills');
            $table->string('dtdIDProduct')->references('id')->on('DTD_Product');
            $table->float('dtdAmountBuy');
            $table->float('dtdPrice');
            $table->float('dtdIntoPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTD_Details_Bills');
    }
};
