<?php

namespace App\Http\Controllers;

use App\Models\DataSiap;
use App\Models\Kriteria;
use App\Models\Normalisasi;
use App\Services\NormalisasiService;

class NormalisasiController extends Controller
{
    protected $normalisasiService;

    public function __construct(NormalisasiService $normalisasiService)
    {
        $this->normalisasiService = $normalisasiService;
    }

    public function index()
    {
        $dataNormalisasis = Normalisasi::all();

        return view('pages.proses.normalisasi', compact('dataNormalisasis'));
    }

    public function prosesNormalisasi()
    {
        $this->normalisasiService->prosesNormalisasi();

        return redirect()->route('normalisasi.index')->with('success', 'Data berhasil dinormalisasi');
    }
}
