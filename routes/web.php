<?php

use App\Exports\MasyarakatExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VektorController;
use App\Http\Controllers\DataSiapController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\SubkriteriaController;
use App\Http\Controllers\PerangkinganController;
use App\Http\Controllers\RatingKecocokanController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('masyarakat', MasyarakatController::class);
    Route::resource('kriteria', KriteriaController::class)->parameters(['kriteria' => 'kriteria']);
    Route::resource('subkriteria', SubkriteriaController::class)->only(['edit', 'update', 'destroy'])->parameters(['subkriteria' => 'subkriteria']);
    Route::post('kriteria/{kriteria}/subkriteria', [SubkriteriaController::class, 'store'])->name('subkriteria.store');
    Route::post('normalisasi', [NormalisasiController::class, 'prosesNormalisasi'])->name('normalisasi.proses');
    Route::get('/data-siap', [DataSiapController::class, 'index'])->name('data-siap.index');
    Route::post('/data-siap', [DataSiapController::class, 'proses'])->name('data-siap.proses');
    Route::get('/raw-data-siap', [DataSiapController::class, 'data'])->name('data-siap.data');
    Route::get('/normalisasi', [NormalisasiController::class, 'index'])->name('normalisasi.index');
    Route::get('/rating-kecocokan', [RatingKecocokanController::class, 'index'])->name('rating.index');
    Route::get('/hitung-vektor-s', [VektorController::class, 'indexVektorS'])->name('vektor-s.index');
    Route::post('/hitung-vektor-s', [VektorController::class, 'prosesVektorS'])->name('vektor-s.proses');
    Route::get('/hitung-vektor-v', [VektorController::class, 'indexVektorV'])->name('vektor-v.index');
    Route::post('/hitung-vektor-v', [VektorController::class, 'prosesVektorV'])->name('vektor-v.proses');
    Route::get('/perangkingan', [PerangkinganController::class, 'index'])->name('perangkingan.index');
    Route::get('/perangkingan-data', [PerangkinganController::class, 'data'])->name('perangkingan.data');
    Route::get('/export-masyarakat', [PerangkinganController::class, 'export'])->name('masyarakat.export');
    Route::get('/ranking/pdf', [App\Http\Controllers\PdfController::class, 'generateRankingPdf'])->name('ranking.pdf');

    Route::controller(MasyarakatController::class)->group(function () {
        Route::get('/masyarakat-data', 'getData')->name('masyarakat.data');
        Route::get('/upload-data-masyarakat', 'uploadPage')->name('masyarakat.upload.page');
        Route::post('/upload-data-masyarakat', 'uploadProcess')->name('masyarakat.upload.process');
    });
});

require __DIR__ . '/auth.php';
