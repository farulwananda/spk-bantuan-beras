<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontendController;

Route::get('/', function () {
    return view('frontend/layout/dashboard');
});

Route::get('/login', [frontendController::class, 'login'])->name('login');
Route::get('/alerts', [frontendController::class, 'alerts'])->name('alerts');
Route::get('/buttons', [frontendController::class, 'buttons'])->name('buttons');
Route::get('/dropdown', [frontendController::class, 'dropdown'])->name('dropdown');
Route::get('/modals', [frontendController::class, 'modals'])->name('modals');
Route::get('/popovers', [frontendController::class, 'popovers'])->name('popovers');
Route::get('/progress_bar', [frontendController::class, 'progress_bar'])->name('progress_bar');
Route::get('/register', [frontendController::class, 'register'])->name('register');
Route::get('/datatables', [frontendController::class, 'datatables'])->name('datatables');
Route::get('/simple-tables', [frontendController::class, 'simple_tables'])->name('simple-tables');
Route::get('/ui-colors', [frontendController::class, 'ui_colors'])->name('ui-colors');
Route::get('/form_basics', [frontendController::class, 'form_basics'])->name('form_basics');
Route::get('/form_advanceds', [frontendController::class, 'form_advanceds'])->name('form_advanceds');
Route::get('/datamasyarakat', [frontendController::class, 'datamasyarakat'])->name('datamasyarakat');
Route::get('/kriteria', [frontendController::class, 'kriteria'])->name('kriteria');
Route::get('/normalisasi', [frontendController::class, 'normalisasi'])->name('normalisasi');
Route::get('/rattingkecocokan', [frontendController::class, 'rattingkecocokan'])->name('rattingkecocokan');
Route::get('/hitungvektorv', [frontendController::class, 'hitungvektorv'])->name('hitungvektorv');
Route::get('/hitungvektors', [frontendController::class, 'hitungvektors'])->name('hitungvektrs');
Route::get('/perangkingan', [frontendController::class, 'perangkingan'])->name('perangkingan');
Route::get('/tambahdatamasyarakat', [frontendController::class, 'tambahdatamasyarakat'])->name('tambahdatamasyarakat');
Route::get('/tambahdatakriteria', [frontendController::class, 'tambahdatakriteria'])->name('tambahdatakriteria');
Route::get('/subkriteria', [frontendController::class, 'subkriteria'])->name('subkriteria');

Route::get('/test1', [DataController::class, 'import'])->name('test1');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
