<?php

namespace App\Services;

use App\Models\Masyarakat;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\DataSiap;
use Illuminate\Support\Facades\DB;
use Exception;

class KonversiNilaiService
{
    protected $kriteria;
    protected $subKriteriaList;
    protected $mappingKriteria;

    public function __construct()
    {
        $this->kriteria = Kriteria::all()->keyBy('kode_kriteria');

        $this->subKriteriaList = SubKriteria::with('kriteria')
            ->get()
            ->groupBy('kriteria_id')
            ->map(function ($items) {
                return $items->keyBy('nama_subkriteria');
            });

        $this->mappingKriteria = [
            'Pekerjaan' => 'pekerjaan',
            'Kepemilikan Rumah' => 'kepemilikan_rumah',
            'Jenis Atap' => 'jenis_atap',
            'Jenis Dinding' => 'jenis_dinding',
            'Jenis Lantai' => 'jenis_lantai',
            'Sumber Penerangan' => 'sumber_penerangan',
            'Bahan Bakar Memasak' => 'bahan_bakar_memasak',
            'Sumber Air' => 'sumber_air_minum',
            'Fasilitas Buang Air Besar' => 'fasilitas_bab',
        ];
    }

    protected function validateData($orang)
    {
        $errors = [];

        if (empty($orang->kode)) {
            $errors[] = "Kode masyarakat kosong";
        }

        foreach ($this->kriteria as $kriteria) {
            $namaKriteria = $kriteria->nama_kriteria;

            $field = $this->mappingKriteria[$namaKriteria] ?? null;

            if (!$field) {
                $errors[] = "Mapping untuk kriteria '{$namaKriteria}' tidak ditemukan";
                continue;
            }

            if (empty($orang->$field)) {
                $errors[] = "Data {$namaKriteria} kosong";
            } elseif (!isset($this->subKriteriaList[$kriteria->id][$orang->$field])) {
                $errors[] = "{$namaKriteria} '{$orang->$field}' tidak cocok dengan subkriteria manapun";
            }
        }

        if (!empty($errors)) {
            throw new Exception("Data tidak valid untuk masyarakat dengan kode {$orang->kode}: " . implode(", ", $errors));
        }
    }

    public function konversiData()
    {
        $masyarakat = Masyarakat::all();

        if ($masyarakat->isEmpty()) {
            throw new Exception('Data masyarakat kosong');
        }

        try {
            DataSiap::truncate();

            foreach ($masyarakat as $orang) {
                $this->validateData($orang);

                $nilaiKonversi = [
                    'kode' => $orang->kode,
                    'proses' => 'raw'
                ];

                foreach ($this->kriteria as $kriteria) {
                    $namaKriteria = $kriteria->nama_kriteria;

                    $field = $this->mappingKriteria[$namaKriteria] ?? null;

                    if (!$field) {
                        throw new Exception("Mapping untuk kriteria '{$namaKriteria}' tidak ditemukan");
                    }

                    $kolom = $kriteria->kode_kriteria;

                    $nilaiKonversi[$kolom] = $this->subKriteriaList[$kriteria->id][$orang->$field]->nilai;
                }

                DataSiap::create($nilaiKonversi);
            }

            return [
                'success' => true,
                'message' => 'Konversi data berhasil'
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
