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
            $table->id();
            $table->string('kode');
            $table->string('id_kepala_keluarga');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('desa_kelurahan');
            $table->string('desil_kesejahteraan');
            $table->text('alamat');
            $table->string('kepala_keluarga');
            $table->string('nik');
            $table->string('padan_dukcapil');
            $table->string('jenis_kelamin');
            $table->string('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('kepemilikan_rumah');
            $table->string('jenis_atap');
            $table->string('jenis_dinding');
            $table->string('jenis_lantai');
            $table->string('sumber_penerangan');
            $table->string('bahan_bakar_memasak');
            $table->string('sumber_air_minum');
            $table->string('fasilitas_bab');
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
