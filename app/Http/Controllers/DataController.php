<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;

class DataController extends Controller
{
    public function import()
    {
        Excel::import(new DataImport, 'data.xlsx');

        return redirect('/')->with('success', 'All good!');
    }
}
