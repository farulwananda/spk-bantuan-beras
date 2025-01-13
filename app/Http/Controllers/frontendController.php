<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Controllers\Controller;


class frontendController extends Controller
{
    public function login()
    {
        return view('frontend/layout/component/login');
    }
    /**
     * Register a new user.
     *
     * @return \Illuminate\Http\Response
     */
    /*************  ✨ Codeium Command ⭐  *************/
    /******  73d69e57-d229-4620-b87d-bae3a6660905  *******/
    public function register()
    {
        return view('frontend/layout/component/register');
    }
    public function alerts()
    {
        return view('frontend/layout/component/alerts');
    }
    public function buttons()
    {
        return view('frontend/layout/component/buttons');
    }
    public function dropdown()
    {
        return view('frontend/layout/component/dropdowns');
    }
    public function modals()
    {
        return view('frontend/layout/component/modals');
    }
    public function popovers()
    {
        return view('frontend/layout/component/popovers');
    }
    public function progress_bar()
    {
        return view('frontend/layout/component/progress-bar');
    }
    public function datatables()
    {
        return view('frontend/layout/component/datatables');
    }
    public function simple_tables()
    {
        return view('frontend/layout/component/simple-tables');
    }
    public function ui_colors()
    {
        return view('frontend/layout/component/ui-colors');
    }
    public function form_basics()
    {
        return view('frontend/layout/component/form_basics');
    }
    public function form_advanceds()
    {
        return view('frontend/layout/component/form_advanceds');
    }
    public function datamasyarakat()
    {
        return view('frontend/layout/component/datamasyarakat');
    }
    public function kriteria()
    {
        return view('frontend/layout/component/kriteria');
    }
    public function normalisasi()
    {
        return view('frontend/layout/component/normalisasi');
    }
    public function hitungvektors()
    {
        return view('frontend/layout/component/hitungvektors');
    }
    public function hitungvektorv()
    {
        return view('frontend/layout/component/hitungvektorv');
    }
    public function perangkingan()
    {
        return view('frontend/layout/component/perangkingan');
    }
    public function rattingkecocokan()
    {
        return view('frontend/layout/component/ratingkecocokan');
    }
    public function tambahdatamasyarakat()
    {
        return view('frontend/layout/component/tambahdatamasyarakat');
    }
    public function tambahdatakriteria()
    {
        return view('frontend/layout/component/tambahdatakriteria');
    }
    public function subkriteria()
    {
        return view('frontend/layout/component/subkriteria');
    }
}
