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
        Schema::create('absen', function (Blueprint $table) {
            $table->id('id_absen');
            $table->date('tanggal');
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            // $table->unsignedBigInteger('id_pegawai');
            // $table->foreign('id_pegawai')->references('id')->on('pegawai');
            $table->foreignId('id_pegawai')->constrained('pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absen');
    }
};
