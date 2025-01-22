<?php

namespace App\Http\Controllers;

use App\Models\DataSiap;
use App\Exports\MasyarakatExport;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class PerangkinganController extends Controller
{
    public function index()
    {
        return view('pages.proses.rangking');
    }

    public function data()
    {
        $query = DataSiap::select('id', 'nik', 'nama', 'kode', 'vektor_v')->orderBy('vektor_v', 'desc')->get();

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('no', function ($row) {
                return '';
            })
            ->make(true);
    }

    public function export()
    {
        $vektorExists = DataSiap::whereNotNull('vektor_v')->exists();
        if (!$vektorExists) {
            return redirect()->back()->with('error', 'Tidak dapat melakukan export karena nilai Vektor V belum dihitung!');
        }

        $timestamp = now()->format('Y-m-d-H-i-s');
        $fileName = "data-hasil-perhitungan-$timestamp.xlsx";

        return Excel::download(new MasyarakatExport, $fileName);
    }
}
