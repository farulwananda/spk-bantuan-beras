<?php

namespace App\Services;

use App\Models\Kriteria;
use App\Models\Normalisasi;

class NormalisasiService
{
    /**
     *
     * @return void
     */
    public function prosesNormalisasi(): void
    {
        $kriterias = Kriteria::all();
        $kriteriaList = [];
        $totalBobot = 0;
        $dataNormalisasi = [];

        Normalisasi::truncate();

        foreach ($kriterias as $kriteria) {
            $kriteriaList[] = $kriteria;
            $totalBobot += $kriteria->bobot_kriteria;
        }

        foreach ($kriteriaList as $index => $kriteria) {
            $pangkat = $kriteria->atribut_kriteria == 'benefit' ? 1 : -1;
            $dataNormalisasi['C' . ($index + 1)] = $kriteria->bobot_kriteria / $totalBobot * $pangkat;
        }

        Normalisasi::create($dataNormalisasi);
    }
}
