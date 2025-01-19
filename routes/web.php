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
    Route::get('/normalisasi', [NormalisasiController::class, 'index'])->name('normalisasi.index');
    Route::get('/rating-kecocokan', [RatingKecocokanController::class, 'index'])->name('rating.index');
    Route::get('/hitung-vektor-s', [VektorController::class, 'indexVektorS'])->name('vektor-s.index');
    Route::get('/hitung-vektor-v', [VektorController::class, 'indexVektorV'])->name('vektor-v.index');
    Route::get('/perangkingan', [PerangkinganController::class, 'index'])->name('perangkingan.index');

    Route::controller(MasyarakatController::class)->group(function () {
        Route::get('/masyarakat-data', 'getData')->name('masyarakat.data');
        Route::get('/upload-data-masyarakat', 'uploadPage')->name('masyarakat.upload.page');
        Route::post('/upload-data-masyarakat', 'uploadProcess')->name('masyarakat.upload.process');
    });

    Route::controller(KriteriaController::class)->group(function () {
        Route::get('/kriteria', 'index')->name('kriteria.index');
        Route::get('/kriteria/create', 'create')->name('kriteria.create');
        Route::post('/kriteria', 'store')->name('kriteria.store');
        Route::get('/kriteria/{kriteria}', 'show')->name('kriteria.show');
        Route::get('/kriteria/{kriteria}/edit', 'edit')->name('kriteria.edit');
        Route::put('/kriteria/{kriteria}', 'update')->name('kriteria.update');
        Route::delete('/kriteria/{kriteria}', 'destroy')->name('kriteria.destroy');
    });
});

Route::get('/subkriteria', [frontendController::class, 'subkriteria'])->name('subkriteria');

require __DIR__ . '/auth.php';
