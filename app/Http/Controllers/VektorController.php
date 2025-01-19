<?php

namespace App\Http\Controllers;

class VektorController extends Controller
{
    public function indexVektorS()
    {
        return view('pages.proses.hitung-vektor-s');
    }

    public function indexVektorV()
    {
        return view('pages.proses.hitung-vektor-v');
    }
}
