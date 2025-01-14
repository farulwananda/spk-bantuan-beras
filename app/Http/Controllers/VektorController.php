<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
