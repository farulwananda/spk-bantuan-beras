<?php

namespace App\Http\Controllers;

use App\Helpers\GenerateKodeHelper;
use App\Http\Requests\KriteriaRequest;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::all();

        return view('pages.kriteria.index', compact('kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generateKode = GenerateKodeHelper::generate(Kriteria::class, 'C', 'kode_kriteria');

        return view('pages.kriteria.create', compact('generateKode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KriteriaRequest $request, Kriteria $kriteria)
    {
        try {
            $kriteria->create([
                'kode_kriteria' => $request->kode_kriteria,
                'nama_kriteria' => $request->nama_kriteria,
                'bobot_kriteria' => $request->bobot_kriteria,
                'tipe_kriteria' => $request->tipe_kriteria,
            ]);

            return redirect()->route('kriteria.index')->with('success', 'Data Kriteria successfully added');
        } catch (\Exception $e) {
            return redirect()->route('kriteria.index')->with('error', 'Data Kriteria failed to add');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        return view('pages.kriteria.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria)
    {
        return view('pages.kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KriteriaRequest $request, Kriteria $kriteria)
    {
        try {
            $kriteria->update([
                'kode_kriteria' => $request->kode_kriteria,
                'nama_kriteria' => $request->nama_kriteria,
                'bobot_kriteria' => $request->bobot_kriteria,
                'tipe_kriteria' => $request->tipe_kriteria,
            ]);

            return redirect()->route('kriteria.index')->with('success', 'Data Kriteria successfully updated');
        } catch (\Exception $e) {
            return redirect()->route('kriteria.index')->with('error', 'Data Kriteria failed to update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kriteria $kriteria)
    {
        try {
            $kriteria->delete();

            return redirect()->route('kriteria.index')->with('success', 'Data Kriteria successfully deleted');
        } catch (\Exception $e) {
            return redirect()->route('kriteria.index')->with('error', 'Data Kriteria failed to delete');
        }
    }
}
