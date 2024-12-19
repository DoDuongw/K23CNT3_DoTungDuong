<?php

use Database\Seeders\DTD_Type_ProductTableSeeder;
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
        Schema::create('DTD_Product', function (Blueprint $table) {
            $table->id();
            $table->string('dtdIDProduct',255)->unique();
            $table->string('dtdNameProduct',255);
            $table->string('dtdImages',255);
            $table->integer('dtdAmount');
            $table->string('dtdPrice',255);
            $table->bigInteger('dtdMaloai')->referrers('id')->on('DTD_Type_Product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTD_Product');
    }
};
