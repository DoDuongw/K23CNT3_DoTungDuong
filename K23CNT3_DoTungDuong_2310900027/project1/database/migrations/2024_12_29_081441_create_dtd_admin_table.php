<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('DTD_ADMIN', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột id
            $table->string('dtdTaiKhoan',255)->unique();
            $table->string('dtdMatKhau',255);
            $table->tinyInteger('dtdTrangThai'); // 0 hoặc 1
            $table->timestamps(); // Tự động tạo created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTD_ADMIN');
    }
};
