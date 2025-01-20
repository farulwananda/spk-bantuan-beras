<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['kode_kriteria' => 'C1', 'nama_kriteria' => 'Pekerjaan', 'bobot_kriteria' => 5, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
            ['kode_kriteria' => 'C2', 'nama_kriteria' => 'Kepemilikan Rumah', 'bobot_kriteria' => 4, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
            ['kode_kriteria' => 'C3', 'nama_kriteria' => 'Jenis Dinding', 'bobot_kriteria' => 2, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
            ['kode_kriteria' => 'C4', 'nama_kriteria' => 'Jenis Lantai', 'bobot_kriteria' => 2, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
            ['kode_kriteria' => 'C5', 'nama_kriteria' => 'Sumber Penerangan', 'bobot_kriteria' => 2, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
            ['kode_kriteria' => 'C6', 'nama_kriteria' => 'Sumber Air', 'bobot_kriteria' => 1, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
            ['kode_kriteria' => 'C7', 'nama_kriteria' => 'Fasilitas Buang Air Besar', 'bobot_kriteria' => 1, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
            ['kode_kriteria' => 'C8', 'nama_kriteria' => 'Jenis Atap', 'bobot_kriteria' => 2, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
            ['kode_kriteria' => 'C9', 'nama_kriteria' => 'Bahan Bakar Memasak', 'bobot_kriteria' => 1, 'tipe_kriteria' => 'cost', 'created_at' => now(), 'updated_at' => now()],
        ])->each(fn(array $kriteria) => Kriteria::create($kriteria));
    }
}
