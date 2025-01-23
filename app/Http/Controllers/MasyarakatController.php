<?php

namespace App\Http\Controllers;

use App\Models\DataSiap;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Imports\MasyarakatImport;
use App\Helpers\GenerateKodeHelper;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MasyarakatRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UploadMasyarakatRequest;
use App\Models\Normalisasi;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('pages.masyarakat.index');
    }

    public function getData(Request $request)
    {
        $query = Masyarakat::query();

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('no', function ($row) {
                return '';
            })
            ->addColumn('action', function ($row) {
                $actionBtn = '
                <div class="d-flex justify-content-center">
                    <button class="mr-2 btn btn-warning btn-sm" title="Edit Data Masyarakat">
                        <a href="' . route('masyarakat.edit', $row->id) . '">
                            <i class="fa-solid fa-pen-to-square" style="color: #f6f6f4;"></i>
                        </a>
                    </button>
                    <form action="' . route('masyarakat.destroy', $row->id) . '" method="POST" style="display:inline;" title="Hapus Masyarakat">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger delete-button" title="Hapus Data Masyarakat">
                            <span class="fa-solid fa-trash"></span>
                        </button>
                    </form>
                </div>';

                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $generateKode = GenerateKodeHelper::generate(Masyarakat::class, 'A', 'kode');

        return view('pages.masyarakat.create', compact('generateKode'));
    }

    public function uploadPage()
    {
        return view('pages.masyarakat.upload');
    }

    public function uploadProcess(UploadMasyarakatRequest $request)
    {
        try {
            ini_set('max_execution_time', 600); //! 5 menit
            ini_set('max_input_time', 600);
            ini_set('memory_limit', '2048M');

            $newfilename = 'excel-file-' . time() . '.' . $request->file('file')->getClientOriginalExtension();
            $path = $request->file('file')->storeAs('temp', $newfilename, 'public');

            Masyarakat::truncate();
            DataSiap::truncate();
            Normalisasi::truncate();

            Excel::import(new MasyarakatImport, storage_path('app/public/' . $path));
            Storage::disk('public')->delete($path);

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat telah berhasil diimport');
        } catch (\Exception $e) {
            Log::error('Import Error: ' . $e->getMessage());

            if (isset($path) && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat telah berhasil diimport');
        }
    }

    public function store(MasyarakatRequest $request, Masyarakat $masyarakat)
    {
        try {
            $masyarakat->create([
                'kode' => GenerateKodeHelper::generate(Masyarakat::class, 'A', 'kode'),
                'id_kepala_keluarga' => $request->id_kepala_keluarga,
                'provinsi' => $request->provinsi,
                'kabupaten_kota' => $request->kabupaten_kota,
                'kecamatan' => $request->kecamatan,
                'desa_kelurahan' => $request->desa_kelurahan,
                'desil_kesejahteraan' => $request->desil_kesejahteraan,
                'alamat' => $request->alamat,
                'kepala_keluarga' => $request->kepala_keluarga,
                'nik' => $request->nik,
                'padan_dukcapil' => $request->padan_dukcapil,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'pekerjaan' => $request->pekerjaan,
                'kepemilikan_rumah' => $request->kepemilikan_rumah,
                'jenis_atap' => $request->jenis_atap,
                'jenis_dinding' => $request->jenis_dinding,
                'jenis_lantai' => $request->jenis_lantai,
                'sumber_penerangan' => $request->sumber_penerangan,
                'bahan_bakar_memasak' => $request->bahan_bakar_memasak,
                'sumber_air_minum' => $request->sumber_air_minum,
                'fasilitas_bab' => $request->fasilitas_bab,
            ]);

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat telah berhasil dibuat');
        } catch (\Exception $e) {
            Log::error('Gagal membuat data masyarakat: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Gagal membuat data masyarakat')->withInput();
        }
    }

    public function show(Masyarakat $masyarakat)
    {
        //
    }

    public function edit(Masyarakat $masyarakat)
    {
        return view('pages.masyarakat.edit', compact('masyarakat'));
    }

    public function update(MasyarakatRequest $request, Masyarakat $masyarakat)
    {
        try {
            $masyarakat->update([
                'kode' => $request->kode,
                'id_kepala_keluarga' => $request->id_kepala_keluarga,
                'provinsi' => $request->provinsi,
                'kabupaten_kota' => $request->kabupaten_kota,
                'kecamatan' => $request->kecamatan,
                'desa_kelurahan' => $request->desa_kelurahan,
                'desil_kesejahteraan' => $request->desil_kesejahteraan,
                'alamat' => $request->alamat,
                'kepala_keluarga' => $request->kepala_keluarga,
                'nik' => $request->nik,
                'padan_dukcapil' => $request->padan_dukcapil,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'pekerjaan' => $request->pekerjaan,
                'kepemilikan_rumah' => $request->kepemilikan_rumah,
                'jenis_atap' => $request->jenis_atap,
                'jenis_dinding' => $request->jenis_dinding,
                'jenis_lantai' => $request->jenis_lantai,
                'sumber_penerangan' => $request->sumber_penerangan,
                'bahan_bakar_memasak' => $request->bahan_bakar_memasak,
                'sumber_air_minum' => $request->sumber_air_minum,
                'fasilitas_bab' => $request->fasilitas_bab,
            ]);

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat telah berhasil diupdate');
        } catch (\Exception $e) {
            Log::error('Gagal mengupdate data masyarakat: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Gagal mengupdate data masyarakat')->withInput();
        }
    }

    public function destroy(Masyarakat $masyarakat)
    {
        try {
            $masyarakat->delete();
            // GenerateKodeHelper::reorder(Masyarakat::class, 'A', 'kode');

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat telah berhasil dihapus');
        } catch (\Exception $e) {
            Log::error('Gagal menghapus data masyarakat: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Gagal menghapus data masyarakat');
        }
    }
}
