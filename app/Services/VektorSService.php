<?php

namespace App\Services;

use App\Models\Kriteria;
use App\Models\DataSiap;

class VektorSService
{
    public function prosesVektorS()
    {
        $kriterias = Kriteria::all();
        $dataSiaps = DataSiap::all();
        $kriteriaList = [];
        $dataSiapList = [];
        $totalBobot = 0;
        $normalizedList = [];
        $vektorSList = [];

        foreach ($kriterias as $kriteria) {
            $kriteriaList[] = $kriteria;
            $totalBobot += $kriteria->bobot_kriteria;
        }

        foreach ($kriteriaList as &$kriteria) {
            $pangkat = $kriteria->atribut_kriteria == 'benefit' ? 1 : -1;
            $normalizedList[] = $kriteria->bobot_kriteria / $totalBobot * $pangkat;
        }

        foreach ($dataSiaps as $dataSiap) {
            $vektorS = pow($dataSiap->C1, $normalizedList[0]) *
                pow($dataSiap->C2, $normalizedList[1]) *
                pow($dataSiap->C3, $normalizedList[2]) *
                pow($dataSiap->C4, $normalizedList[3]) *
                pow($dataSiap->C5, $normalizedList[4]) *
                pow($dataSiap->C6, $normalizedList[5]) *
                pow($dataSiap->C7, $normalizedList[6]) *
                pow($dataSiap->C8, $normalizedList[7]) *
                pow($dataSiap->C9, $normalizedList[8]);

            $vektorSList[] = $vektorS;
        }

        foreach ($dataSiaps as $index => $dataSiap) {
            $dataSiap->vektor_s = $vektorSList[$index];
            $dataSiap->save();
        }
    }
}
