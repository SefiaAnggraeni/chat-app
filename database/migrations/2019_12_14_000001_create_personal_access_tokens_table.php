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
        Schema::create('masyarakats', function (Blueprint $table) {
         
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nik', 20)->unique()->nullable();
            $table->string('nama');
            $table->enum('jk', ['L', 'P']);
            $table->date('ttl')->nullable();
            $table->string('telepon');
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakats');
    }
};
