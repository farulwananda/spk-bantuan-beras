<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use App\Models\SubKriteria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'C1' => [
                ['nama_subkriteria' => 'Pegawai Swasta', 'nilai' => 5],
                ['nama_subkriteria' => 'Wiraswasta', 'nilai' => 4],
                ['nama_subkriteria' => 'Lainnya', 'nilai' => 3],
                ['nama_subkriteria' => 'Pekerja Lepas', 'nilai' => 2],
                ['nama_subkriteria' => 'Tidak/Belum Bekerja', 'nilai' => 1],
            ],
            'C2' => [
                ['nama_subkriteria' => 'Milik Sendiri', 'nilai' => 4],
                ['nama_subkriteria' => 'Bebas Sewa', 'nilai' => 3],
                ['nama_subkriteria' => 'Kontrak/Sewa', 'nilai' => 2],
                ['nama_subkriteria' => 'Menumpang', 'nilai' => 1],
            ],
            'C3' => [
                ['nama_subkriteria' => 'Tembok', 'nilai' => 4],
                ['nama_subkriteria' => 'Bambu', 'nilai' => 3],
                ['nama_subkriteria' => 'Lainnya', 'nilai' => 2],
                ['nama_subkriteria' => 'Kayu/Papan', 'nilai' => 1],
            ],
            'C4' => [
                ['nama_subkriteria' => 'Keramik/Granit/Marmer/Ubin/Tegel/Teraso', 'nilai' => 4],
                ['nama_subkriteria' => 'Semen', 'nilai' => 3],
                ['nama_subkriteria' => 'Tanah', 'nilai' => 2],
                ['nama_subkriteria' => 'Lainnya', 'nilai' => 1],
            ],
            'C5' => [
                ['nama_subkriteria' => 'Listrik Pribadi s/d 900 Watt', 'nilai' => 4],
                ['nama_subkriteria' => 'Listrik Pribadi > 900 Watt', 'nilai' => 3],
                ['nama_subkriteria' => 'Listrik Bersama', 'nilai' => 2],
            ],
            'C6' => [
                ['nama_subkriteria' => 'Ledeng/PAM', 'nilai' => 5],
                ['nama_subkriteria' => 'Sumur Bor', 'nilai' => 4],
                ['nama_subkriteria' => 'Sumur Terlindung', 'nilai' => 3],
                ['nama_subkriteria' => 'Sumur Tidak Terlindung', 'nilai' => 2],
            ],
            'C7' => [
                ['nama_subkriteria' => 'Ya, dengan Septic Tank', 'nilai' => 4],
                ['nama_subkriteria' => 'Ya, tanpa Septic Tank', 'nilai' => 3],
                ['nama_subkriteria' => 'Tidak, Jamban Umum/Bersama', 'nilai' => 2],
                ['nama_subkriteria' => 'Lainnya', 'nilai' => 1],
            ],
            'C8' => [
                ['nama_subkriteria' => 'Asbes/Seng', 'nilai' => 4],
                ['nama_subkriteria' => 'Genteng', 'nilai' => 3],
            ],
            'C9' => [
                ['nama_subkriteria' => 'Listrik/Gas', 'nilai' => 4],
                ['nama_subkriteria' => 'Lainnya', 'nilai' => 3],
                ['nama_subkriteria' => 'Arang/Kayu', 'nilai' => 2],
            ],
        ];

        foreach ($data as $kodeKriteria => $subkriterias) {
            $kriteria = Kriteria::where('kode_kriteria', $kodeKriteria)->first();

            if ($kriteria) {
                foreach ($subkriterias as $subkriteria) {
                    SubKriteria::create([
                        'kriteria_id' => $kriteria->id,
                        'nama_subkriteria' => $subkriteria['nama_subkriteria'],
                        'nilai' => $subkriteria['nilai'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
