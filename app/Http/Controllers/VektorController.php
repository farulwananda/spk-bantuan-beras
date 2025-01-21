<?php

namespace App\Http\Controllers;

use App\Models\DataSiap;
use App\Models\Kriteria;
use App\Services\VektorSService;
use App\Services\VektorVService;

class VektorController extends Controller
{
    protected $vektorSService;
    protected $vektorVService;

    public function __construct(VektorSService $vektorSService, VektorVService $vektorVService)
    {
        $this->vektorSService = $vektorSService;
        $this->vektorVService = $vektorVService;
    }

    public function indexVektorS()
    {
        $vektorS = DataSiap::select('kode', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'vektor_s')->get();

        return view('pages.proses.hitung-vektor-s', compact('vektorS'));
    }

    public function prosesVektorS()
    {
        $this->vektorSService->prosesVektorS();

        return redirect()->route('vektor-s.index')->with('success', 'Data berhasil dihitung');
    }

    public function indexVektorV()
    {
        $vektorV = DataSiap::select('kode', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'vektor_v')->get();

        return view('pages.proses.hitung-vektor-v', compact('vektorV'));
    }

    public function prosesVektorV()
    {
        $this->vektorVService->prosesVektorV();

        return redirect()->route('vektor-v.index')->with('success', 'Data berhasil dihitung');
    }
}
