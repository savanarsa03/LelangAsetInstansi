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
        Schema::create('tambahlelangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('kategori');
            $table->binary('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambahlelangs');
    }
};