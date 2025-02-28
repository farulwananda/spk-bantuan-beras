<?php

namespace App\Http\Controllers;

use App\Models\DataSiap;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generateRankingPdf()
    {
        $data = DataSiap::select('nik', 'kepala_keluarga', 'kode', 'vektor_v')
            ->whereNotNull('vektor_v')
            ->orderBy('vektor_v', 'desc')
            ->get();

        $pdf = Pdf::loadView('pdf.ranking', ['data' => $data]);
        $pdf->setPaper('a4', 'portrait');

        $filename = 'rekomendasi-bantuan-beras-' . date('d-m-Y') . '.pdf';
        return $pdf->stream($filename);
    }
}
