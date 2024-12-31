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
        Schema::create('DTD_Customers', function (Blueprint $table) {
            $table->id();
            $table->string('dtdIDCustomers',255)->unique();
            $table->string('dtdNameCustomers',255);
            $table->string('dtdEmail',255);
            $table->string('dtdPassword',255);
            $table->string('dtdPhoneNumber',255);
            $table->string('dtdAddress',255);
            $table->date('dtdRegistrationDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTD_Customers');
    }
};
