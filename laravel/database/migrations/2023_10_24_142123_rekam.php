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
        Schema::create('rekam', function (Blueprint $table) {
            $table->id();
            $table->string('Dokter');
            $table->string('Pasien');
            $table->string('Keterangan');
            $table->string('Penyakit');
            $table->integer('Suhu');
            $table->string('Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam');
    }
};
