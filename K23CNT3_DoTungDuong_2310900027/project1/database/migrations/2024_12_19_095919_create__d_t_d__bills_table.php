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
        Schema::create('DTD_Bills', function (Blueprint $table) {
            $table->id();
            $table->string('dtdIDBills',255)->unique();
            $table->bigInteger('dtdIDCustomres')->references('id')->on('DTD_Customers');
            $table->date('dtdDateBills');
            $table->string('dtdNameCustomers',255);
            $table->string('dtdEmail',255);
            $table->string('dtdPhoneNumber',255);
            $table->string('dtdAddress',255);
            $table->float('dtdValue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTD_Bills');
    }
};
