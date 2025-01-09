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
        Schema::create('admins', function (Blueprint $table) {
           
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama');
            $table->string('telepon');
            $table->timestamps();
        });

        // Schema::create('tb_shelter', function (Blueprint $table) {
           
        //     $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        //     $table->string('nama');
        //     $table->string('telepon');
        //     $table->string('alamat_shelter');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
        // Schema::dropIfExists('tb_shelter');
    }
};
