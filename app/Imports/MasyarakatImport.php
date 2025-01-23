<?php

namespace App\Imports;

use App\Models\Masyarakat;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class MasyarakatImport implements ToModel, WithChunkReading, WithBatchInserts, WithHeadingRow, SkipsEmptyRows
{
    private $counter;

    public function __construct()
    {
        $lastCode = DB::table('masyarakats')
            ->orderBy(DB::raw('CAST(SUBSTRING(kode, 2) AS UNSIGNED)'), 'desc')
            ->value('kode') ?? 'A0';

        $this->counter = (int)substr($lastCode, 1);
    }

    public function model(array $row)
    {
        if (empty(array_filter($row))) {
            return null;
        }

        $this->counter++;
        $newKode = 'A' . $this->counter;

        return new Masyarakat([
            'kode' => $newKode,
            'id_kepala_keluarga' => $row['id_keluarga_p3ke'] ?? null,
            'provinsi' => $row['provinsi'] ?? null,
            'kabupaten_kota' => $row['kabupaten_kota'] ?? null,
            'kecamatan' => $row['kecamatan'] ?? null,
            'desa_kelurahan' => $row['desa_kelurahan'] ?? null,
            'desil_kesejahteraan' => $row['desil_kesejahteraan'] ?? null,
            'alamat' => $row['alamat'] ?? null,
            'kepala_keluarga' => $row['kepala_keluarga'] ?? null,
            'nik' => $row['nik'] ?? null,
            'padan_dukcapil' => $row['padan_dukcapil'] ?? null,
            'jenis_kelamin' => $row['jenis_kelamin'] ?? null,
            'tanggal_lahir' => $row['tanggal_lahir'] ?? null,
            'pekerjaan' => $row['pekerjaan'] ?? null,
            'kepemilikan_rumah' => $row['kepemilikan_rumah'] ?? null,
            'jenis_atap' => $row['jenis_atap'] ?? null,
            'jenis_dinding' => $row['jenis_dinding'] ?? null,
            'jenis_lantai' => $row['jenis_lantai'] ?? null,
            'sumber_penerangan' => $row['sumber_penerangan'] ?? null,
            'bahan_bakar_memasak' => $row['bahan_bakar_memasak'] ?? null,
            'sumber_air_minum' => $row['sumber_air_minum'] ?? null,
            'fasilitas_bab' => $row['memiliki_fasilitas_buang_air_besar'] ?? null,
        ]);
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public function batchSize(): int
    {
        return 500;
    }

    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }
}
