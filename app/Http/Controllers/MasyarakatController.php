<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Imports\MasyarakatImport;
use Illuminate\Support\Facades\DB;
use App\Helpers\GenerateKodeHelper;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MasyarakatRequest;
use App\Http\Requests\UploadMasyarakatRequest;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakats = Masyarakat::orderBy('kode', 'desc')->get();

        return view('pages.masyarakat.index', compact('masyarakats'));
    }

    public function create()
    {
        return view('pages.masyarakat.create');
    }

    public function uploadPage()
    {
        return view('pages.masyarakat.upload');
    }


    // DB::transaction(function () use ($path) {
    //     Masyarakat::truncate();

    //     Excel::import(new MasyarakatImport, storage_path('app/public/' . $path));

    //     Storage::disk('public')->delete($path);
    // });
    public function uploadProcess(UploadMasyarakatRequest $request)
    {
        return response()->json(['success' => true, 'message' => 'Controller reached']);

        // try {
        //     $newfilename = 'excel-file-' . time() . '.' . $request->file('file')->getClientOriginalExtension();
        //     $path = $request->file('file')->storeAs('temp', $newfilename, 'public');



        //     return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat imported successfully');
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Failed to import data masyarakat')->withInput();
        // }
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

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat created successfully');
        } catch (\Exception $e) {
            Log::error('Failed to create data masyarakat: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create data masyarakat')->withInput();
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

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat updated successfully');
        } catch (\Exception $e) {
            Log::error('Failed to update data masyarakat: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update data masyarakat')->withInput();
        }
    }

    public function destroy(Masyarakat $masyarakat)
    {
        try {
            $masyarakat->delete();
            GenerateKodeHelper::reorder(Masyarakat::class, 'A', 'kode');

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat deleted successfully');
        } catch (\Exception $e) {
            Log::error('Failed to delete data masyarakat: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete data masyarakat');
        }
    }
}
