<?php

namespace App\Exports;

use App\Models\DataSiap;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MasyarakatExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles
{
    public function collection()
    {
        return DataSiap::select('nik', 'kepala_keluarga', 'kode', 'vektor_v')->orderBy('vektor_v', 'desc')->get();
    }

    public function headings(): array
    {
        return [
            'NIK',
            'Nama Kepala Keluarga',
            'Kode',
            'Nilai',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 30,
            'C' => 15,
            'D' => 20,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => [
                'font' => [
                    'bold' => true,
                    'color' => ['argb' => 'FFFFFFFF'],
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['argb' => 'FF4CAF50'],
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
            ],
        ];
    }
}
