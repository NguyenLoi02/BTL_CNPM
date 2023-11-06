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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->string('MaKH')->primary();
            $table->string('HoTen');
            $table->date('NgaySinh');
            $table->string('SoDienThoai');
            $table->string('DiaChi');
            $table->string('Email');
            $table->string('GioiTinh');
            $table->string('Username');
            $table->foreign('Username')->references('Username')->on('tai_khoans');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
