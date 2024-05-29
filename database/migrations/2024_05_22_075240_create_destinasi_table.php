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
        Schema::create('tbl_destinasi', function (Blueprint $table) {
            $table->integer('id_destinasi');
            $table->foreignId('id_user');
            $table->foreignId('id_kategori');
            $table->string('nama_destinasi');
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->decimal('harga');
            $table->integer('status');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->timestamps();
            
            $table->foreign('id_kategori')->references('id_kategori')->on('tbl_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_destinasi');
    }
};
