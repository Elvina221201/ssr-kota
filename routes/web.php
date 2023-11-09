<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

/* Pemisah */

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/causes', function () {
    return view('causes');
})->name('causes');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/grebek', function () {
    return view('grebek');
})->name('grebek');

Route::get('/ketuk-pintu', function () {
    return view('ketuk-pintu');
})->name('ketuk-pintu');
Route::middleware('auth')->group(function () {
    Route::get('Dashboard', [AdminController::class, 'Dashboard']);
    Route::get('/arsip-berita', [BeritaController::class, 'index']);
    Route::get('/input-berita', [BeritaController::class, 'input']);
    Route::get('/kategori-berita', [BeritaController::class, 'kategoriIndex']);

    Route::get('/arsip-kegiatan', [BeritaController::class, 'index']);
    Route::get('/input-kegiatan', [BeritaController::class, 'input']);

});


Route::get('Login', [SessionController::class, 'index']);
Route::post('ProsesLogin', [SessionController::class, 'login']);
Route::get('logout', [SessionController::class, 'logout']);
