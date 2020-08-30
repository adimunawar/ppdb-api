<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('nisn');
            $table->string('nis');
            $table->string('kelamin');
            $table->string('agama');
            $table->string('ttl');
            $table->string('asalSekolah');
            $table->string('alamat');
            $table->string('namaAyah');
            $table->string('namaIbu');
            $table->string('pekerjaanAyah');
            $table->string('pekerjaanIbu');
            $table->string('nomorTlp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
