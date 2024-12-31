
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
        Schema::create('dtdvattu', function (Blueprint $table) {
            // $table->id
            $table->string('dtdMavTu')->primary();
            $table->string('dtdTenVTu')->unique();
            $table->string('dtdDvTinh');
            $table->float('dtdPhanTram');
            //$table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtdvattu');
    }
};