<?php

namespace App\Http\Controllers;

use App\Models\DataSiap;
use Illuminate\Http\Request;
use App\Services\KonversiNilaiService;
use Yajra\DataTables\Facades\DataTables;

class DataSiapController extends Controller
{
    protected $konversiService;

    public function __construct(KonversiNilaiService $konversiService)
    {
        $this->konversiService = $konversiService;
    }

    public function index()
    {
        return view('pages.proses.data-siap');
    }

    public function data()
    {
        $query = DataSiap::query();

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('no', function ($row) {
                return '';
            })
            ->make(true);
    }

    public function proses()
    {
        $result = $this->konversiService->konversiData();

        if ($result['success']) {
            return redirect()->route('data-siap.index')->with('success', $result['message']);
        }

        return redirect()->route('masyarakat.index')->with('error', $result['message']);
    }
}
