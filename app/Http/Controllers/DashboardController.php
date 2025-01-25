<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\Masyarakat;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $dataUsers = User::count();
        $dataMasyarakats = Masyarakat::count();
        $dataKriterias = Kriteria::count();
        $dataSubKriterias = SubKriteria::count();

        return view('pages.dashboard.index', compact('dataUsers', 'dataMasyarakats', 'dataKriterias', 'dataSubKriterias'));
    }
}
