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
        Schema::create('tb_shelter', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('telepon')->unique();
            $table->string('alamat_shelter');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('tb_artikel', function (Blueprint $table) {
            $table->id();
            $table->string('artikel_image');
            $table->string('artikel_judul');
            $table->String('artikel_deskripsi');
            $table->string('artikel_status');
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
