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
        Schema::create('datapuskeswans', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama_puskeswan');
            $table->string('deskripsi');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('kelurahan_desa');
            $table->string('dusun');
            $table->string('rt');
            $table->string('rw');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('hari1');
            $table->string('hari2');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->string('narahubung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
