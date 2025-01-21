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
        Schema::create('normalisasis', function (Blueprint $table) {
            $table->id();
            $table->decimal('C1')->nullable();
            $table->decimal('C2')->nullable();
            $table->decimal('C3')->nullable();
            $table->decimal('C4')->nullable();
            $table->decimal('C5')->nullable();
            $table->decimal('C6')->nullable();
            $table->decimal('C7')->nullable();
            $table->decimal('C8')->nullable();
            $table->decimal('C9')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normalisasis');
    }
};
