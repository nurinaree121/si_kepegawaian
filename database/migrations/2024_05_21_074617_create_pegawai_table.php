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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->integer('nip');
            $table->string('nama');
            $table->enum('jenis_kelamin',['pria','wanita']);
            $table->string('foto',100);
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('status_kepegawaian');
            $table->string('alamat');
            $table->string('username');
            $table->integer('password');
            $table->unsignedBigInteger('id_jabatan');
            $table->foreign('id_jabatan')->references('id')->on('jabatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
