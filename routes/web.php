<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\PerangkinganController;
use App\Http\Controllers\RatingKecocokanController;
use App\Http\Controllers\VektorController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('masyarakat', MasyarakatController::class);
    Route::resource('kriteria', KriteriaController::class);
    Route::get('/normalisasi', [NormalisasiController::class, 'index'])->name('normalisasi.index');
    Route::get('/rating-kecocokan', [RatingKecocokanController::class, 'index'])->name('rating.index');
    Route::get('/hitung-vektor-s', [VektorController::class, 'indexVektorS'])->name('vektor-s.index');
    Route::get('/hitung-vektor-v', [VektorController::class, 'indexVektorV'])->name('vektor-v.index');
    Route::get('/perangkingan', [PerangkinganController::class, 'index'])->name('perangkingan.index');
});

Route::get('/alerts', [frontendController::class, 'alerts'])->name('alerts');
Route::get('/progress_bar', [frontendController::class, 'progress_bar'])->name('progress_bar');
Route::get('/datatables', [frontendController::class, 'datatables'])->name('datatables');
Route::get('/simple-tables', [frontendController::class, 'simple_tables'])->name('simple-tables');
Route::get('/form_basics', [frontendController::class, 'form_basics'])->name('form_basics');
Route::get('/form_advanceds', [frontendController::class, 'form_advanceds'])->name('form_advanceds');
Route::get('/tambahdatamasyarakat', [frontendController::class, 'tambahdatamasyarakat'])->name('tambahdatamasyarakat');
Route::get('/tambahdatakriteria', [frontendController::class, 'tambahdatakriteria'])->name('tambahdatakriteria');
Route::get('/subkriteria', [frontendController::class, 'subkriteria'])->name('subkriteria');

Route::get('/test1', [DataController::class, 'import'])->name('test1');


require __DIR__ . '/auth.php';
