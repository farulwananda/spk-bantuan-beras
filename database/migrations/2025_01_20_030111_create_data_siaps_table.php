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
        Schema::create('data_siaps', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('kepala_keluarga');
            $table->string('kode');
            $table->integer('C1');
            $table->integer('C2');
            $table->integer('C3');
            $table->integer('C4');
            $table->integer('C5');
            $table->integer('C6');
            $table->integer('C7');
            $table->integer('C8');
            $table->integer('C9');
            $table->float('vektor_s')->nullable();
            $table->float('vektor_v')->nullable();
            $table->enum('proses', ['raw', 'normalisasi', 'vektor_s', 'vektor_v']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siaps');
    }
};
