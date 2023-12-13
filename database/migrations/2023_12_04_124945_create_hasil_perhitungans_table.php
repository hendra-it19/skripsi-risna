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
        Schema::create('hasil_perhitungans', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->foreignId('jenis_kelamin')->references('id')->on('jenis_kelamins');
            $table->foreignId('tinggi_badan')->references('id')->on('tinggi_badans');
            $table->foreignId('ciri_fisik')->references('id')->on('ciri_fisiks');
            $table->foreignId('hasil_diagnosa')->references('id')->on('hasil_diagnosas');
            $table->foreignId('solusi_stunting')->references('id')->on('solusi_stuntings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_perhitungans');
    }
};
