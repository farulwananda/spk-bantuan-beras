<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingKecocokanController extends Controller
{
    public function index()
    {
        return view('pages.proses.rating-kecocokan');
    }
}
