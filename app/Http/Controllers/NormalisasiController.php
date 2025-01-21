<?php

namespace App\Http\Controllers;

use App\Models\DataSiap;
use App\Models\Kriteria;

class NormalisasiController extends Controller
{
    public function index()
    {
        $this->normalisasi();
        return view('pages.proses.normalisasi');
    }

    public function normalisasi()
    {
        $kriterias = Kriteria::all();
        $kriteriaList = [];
        $dataSiaps = DataSiap::all();
        $dataSiapList = [];
        $totalBobot = 0;
        $normalizedList = [];
        $vektorSList = [];
        $totalVektorS = 0;
        $vektorVList = [];
        $totalVektorV = 0;

        foreach ($kriterias as $kriteria) {
            $kriteriaList[] = $kriteria;
            $totalBobot += $kriteria->bobot_kriteria;
        }

        foreach ($kriteriaList as &$kriteria) {
            $pangkat = 0;
            if($kriteria->atribut_kriteria == 'benefit'){
                $pangkat = 1;
            }else{
                $pangkat = -1;
            }
            $normalizedList[] = $kriteria->bobot_kriteria / $totalBobot * $pangkat;
        }
        
        foreach ($dataSiaps as $dataSiap) {
            $dataSiapList[] = $dataSiap;
        }

        foreach ($dataSiapList as $dataSiap) {
            $vektorSList[] = pow($dataSiap->C1, $normalizedList[0]) * pow($dataSiap->C2, $normalizedList[1]) * pow($dataSiap->C3, $normalizedList[2]) * pow($dataSiap->C4, $normalizedList[3]) * pow($dataSiap->C5, $normalizedList[4]) * pow($dataSiap->C6, $normalizedList[5]) * pow($dataSiap->C7, $normalizedList[6]) * pow($dataSiap->C8, $normalizedList[7]) * pow($dataSiap->C9, $normalizedList[8]);
        }

        foreach ($vektorSList as $vektorS) {
            $totalVektorS += $vektorS;
        }
        
        foreach ($vektorSList as $vektorS) {
            $vektorVList[] = $vektorS / $totalVektorS;
        }

        foreach($vektorVList as $vektorV){
            $totalVektorV += $vektorV;
        }

        dd($kriteriaList, $normalizedList, $vektorSList, $totalVektorS, $vektorVList, $totalVektorV);
    }
}
