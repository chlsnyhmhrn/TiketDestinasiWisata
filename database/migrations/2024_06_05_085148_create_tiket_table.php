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
        Schema::create('tbl_tiket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_destinasi')->constrained('tbl_destinasi')->cascadeOnDelete();
            $table->foreignId('id_user')->constrained('users')->cascadeOnDelete();
            $table->integer('total_pesanan');
            $table->integer('total_harga');
            $table->date('tanggal_pesanan');
            $table->date('tanggal_kunjungan');
            $table->string('code_tiket');
            $table->enum('status', ['Diproses','Dibatalkan', 'Disetujui'])->default('Diproses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tiket');
    }
};
