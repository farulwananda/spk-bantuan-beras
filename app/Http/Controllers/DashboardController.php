<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\Masyarakat;
use App\Models\SubKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $dataMasyarakats = Masyarakat::count();
        $dataKriterias = Kriteria::count();

        // Mengambil data untuk pie chart desa_kelurahan
        $dataDesa = Masyarakat::select('desa_kelurahan', DB::raw('count(*) as total'))
            ->groupBy('desa_kelurahan')
            ->get();

        $labelsDesa = $dataDesa->pluck('desa_kelurahan')->toArray();
        $dataTotalDesa = $dataDesa->pluck('total')->toArray();

        return view('pages.dashboard.index', compact(
            'dataMasyarakats',
            'dataKriterias',
            'labelsDesa',
            'dataTotalDesa'
        ));
    }
}
