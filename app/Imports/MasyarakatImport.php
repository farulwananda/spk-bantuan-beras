<?php

namespace App\Imports;

use App\Helpers\GenerateKodeHelper;
use App\Models\Masyarakat;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MasyarakatImport implements ToModel, WithHeadingRow, WithMultipleSheets
{
    /**
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Masyarakat([
            'kode' => GenerateKodeHelper::generate(Masyarakat::class, 'A', 'kode'),
            'id_kepala_keluarga' => $row['id_keluarga_p3ke'],
            'provinsi' => $row['provinsi'],
            'kabupaten_kota' => $row['kabupaten_kota'],
            'kecamatan' => $row['kecamatan'],
            'desa_kelurahan' => $row['desa_kelurahan'],
            'desil_kesejahteraan' => $row['desil_kesejahteraan'],
            'alamat' => $row['alamat'],
            'kepala_keluarga' => $row['kepala_keluarga'],
            'nik' => $row['nik'],
            'padan_dukcapil' => $row['padan_dukcapil'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'pekerjaan' => $row['pekerjaan'],
            'kepemilikan_rumah' => $row['kepemilikan_rumah'],
            'jenis_atap' => $row['jenis_atap'],
            'jenis_dinding' => $row['jenis_dinding'],
            'jenis_lantai' => $row['jenis_lantai'],
            'sumber_penerangan' => $row['sumber_penerangan'],
            'bahan_bakar_memasak' => $row['bahan_bakar_memasak'],
            'sumber_air_minum' => $row['sumber_air_minum'],
            'fasilitas_bab' => $row['memiliki_fasilitas_buang_air_besar'],
        ]);
    }

    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }
}
