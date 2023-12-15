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
        Schema::create('tinggi_badan', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 5);
            $table->integer('umur');
            $table->foreignId('jenis_kelamin')->references('id')->on('jenis_kelamin')->cascadeOnDelete();
            $table->integer('tinggi_badan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tinggi_badan');
    }
};
