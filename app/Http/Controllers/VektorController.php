<?php

namespace App\Http\Controllers;

use App\Models\DataSiap;
use App\Models\Kriteria;
use App\Models\Normalisasi;
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
        if (DataSiap::count() === 0) {
            return redirect()->back()->with('error', 'Data Rating Kecocokan kosong. Silakan proses rating kecocokan terlebih dahulu sebelum memproses perhitungan!');
        }

        if (Normalisasi::count() === 0) {
            return redirect()->back()->with('error', 'Data Normalisasi kosong. Silakan proses data normalisasi terlebih dahulu sebelum memproses perhitungan!');
        }

        $isEmpty = DataSiap::where(function ($query) {
            $query->whereNull('C1')->orWhere('C1', '')
                ->orWhereNull('C2')->orWhere('C2', '')
                ->orWhereNull('C3')->orWhere('C3', '')
                ->orWhereNull('C4')->orWhere('C4', '')
                ->orWhereNull('C5')->orWhere('C5', '')
                ->orWhereNull('C6')->orWhere('C6', '')
                ->orWhereNull('C7')->orWhere('C7', '')
                ->orWhereNull('C8')->orWhere('C8', '')
                ->orWhereNull('C9')->orWhere('C9', '');
        })->exists();

        if ($isEmpty) {
            return redirect()->back()->with('error', 'Data pada Ratin Kecocokan tidak lengkap. Pastikan semua kolom C1 hingga C9 sudah terisi sebelum melanjutkan!');
        }

        $isNormalisasiEmpty = Normalisasi::where(function ($query) {
            $query->whereNull('C1')->orWhere('C1', '')
                ->orWhereNull('C2')->orWhere('C2', '')
                ->orWhereNull('C3')->orWhere('C3', '')
                ->orWhereNull('C4')->orWhere('C4', '')
                ->orWhereNull('C5')->orWhere('C5', '')
                ->orWhereNull('C6')->orWhere('C6', '')
                ->orWhereNull('C7')->orWhere('C7', '')
                ->orWhereNull('C8')->orWhere('C8', '')
                ->orWhereNull('C9')->orWhere('C9', '');
        })->exists();

        if ($isNormalisasiEmpty) {
            return redirect()->back()->with('error', 'Data pada Normalisasi tidak lengkap. Pastikan semua kolom C1 hingga C9 sudah terisi sebelum melanjutkan!');
        }

        $this->vektorSService->prosesVektorS();

        return redirect()->route('vektor-s.index')->with('success', 'Data perhitungan Vektor S telah berhasil diproses!');
    }



    public function indexVektorV()
    {
        $vektorV = DataSiap::select('kode', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'vektor_v')->get();

        return view('pages.proses.hitung-vektor-v', compact('vektorV'));
    }

    public function prosesVektorV()
    {
        $isEmpty = DataSiap::whereNull('vektor_s')->exists();

        if ($isEmpty) {
            return redirect()->back()->with('error', 'Tidak dapat melakukan perhitungan karena data Vektor S belum diproses!');
        }

        $isEmpty = DataSiap::where(function ($query) {
            $query->whereNull('C1')->orWhere('C1', '')
                ->orWhereNull('C2')->orWhere('C2', '')
                ->orWhereNull('C3')->orWhere('C3', '')
                ->orWhereNull('C4')->orWhere('C4', '')
                ->orWhereNull('C5')->orWhere('C5', '')
                ->orWhereNull('C6')->orWhere('C6', '')
                ->orWhereNull('C7')->orWhere('C7', '')
                ->orWhereNull('C8')->orWhere('C8', '')
                ->orWhereNull('C9')->orWhere('C9', '');
        })->exists();

        if ($isEmpty) {
            return redirect()->back()->with('error', 'Data pada Ratin Kecocokan tidak lengkap. Pastikan semua kolom C1 hingga C9 sudah terisi sebelum melanjutkan!');
        }

        $isNormalisasiEmpty = Normalisasi::where(function ($query) {
            $query->whereNull('C1')->orWhere('C1', '')
                ->orWhereNull('C2')->orWhere('C2', '')
                ->orWhereNull('C3')->orWhere('C3', '')
                ->orWhereNull('C4')->orWhere('C4', '')
                ->orWhereNull('C5')->orWhere('C5', '')
                ->orWhereNull('C6')->orWhere('C6', '')
                ->orWhereNull('C7')->orWhere('C7', '')
                ->orWhereNull('C8')->orWhere('C8', '')
                ->orWhereNull('C9')->orWhere('C9', '');
        })->exists();

        if ($isNormalisasiEmpty) {
            return redirect()->back()->with('error', 'Data pada Normalisasi tidak lengkap. Pastikan semua kolom C1 hingga C9 sudah terisi sebelum melanjutkan!');
        }

        $this->vektorVService->prosesVektorV();

        return redirect()->route('vektor-v.index')->with('success', 'Data perhitungan Vektor V telah berhasil diproses!');
    }
}
