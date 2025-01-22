<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubKriteriaRequest;
use App\Models\SubKriteria;

class SubkriteriaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create($kriteriaId)
    {
        return view('pages.subkriteria.create', compact('kriteriaId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubKriteriaRequest $request, SubKriteria $subKriteria, $kriteriaId)
    {
        $subKriteria->create([
            'kriteria_id' => $kriteriaId,
            'nama_subkriteria' => $request->nama_subkriteria,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('kriteria.show', $kriteriaId)->with('success', 'Data Sub Kriteria telah berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subkriteria = SubKriteria::findOrFail($id);

        return view('pages.subkriteria.edit', compact('subkriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubKriteriaRequest $request, $id)
    {
        $subKriteria = SubKriteria::findOrFail($id);
        $subKriteria->update([
            'kriteria_id' => $subKriteria->kriteria_id,
            'nama_subkriteria' => $request->nama_subkriteria,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('kriteria.show', $subKriteria->kriteria_id)->with('success', 'Data Sub Kriteria telah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subKriteria = SubKriteria::findOrFail($id);
        $subKriteria->delete();

        return redirect()->back()->with('success', 'Data Sub Kriteria telah berhasil dihapus');
    }
}
