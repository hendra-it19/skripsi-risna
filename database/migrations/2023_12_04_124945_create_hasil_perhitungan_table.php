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
        Schema::create('hasil_perhitungan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->foreignId('jenis_kelamin')->references('id')->on('jenis_kelamin');
            $table->foreignId('tinggi_badan')->references('id')->on('tinggi_badan');
            $table->foreignId('ciri_fisik')->references('id')->on('ciri_fisik');
            $table->foreignId('hasil_diagnosa')->references('id')->on('hasil_diagnosa');
            $table->foreignId('solusi_stunting')->references('id')->on('solusi_stunting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_perhitungan');
    }
};
