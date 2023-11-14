<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\KegiatanController;

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

        Route::get('input-berita', [PostsController::class, 'index']);
        Route::post('input-berita', [PostsController::class, 'store']);
        Route::get('arsip-berita', [PostsController::class, 'show']);


        Route::get('input-kegiatan', [KegiatanController::class, 'index']);
        Route::post('input-kegiatan', [KegiatanController::class, 'store']);
        Route::post('delete-kegiatan/{id}', [KegiatanController::class, 'destroy']);
        Route::get('arsip-kegiatan', [KegiatanController::class, 'show']);

        Route::get('{id}', [PostsController::class, 'show_id']);
});



Route::get('login', [SessionController::class, 'index'])->name("login");
Route::post('ProsesLogin', [SessionController::class, 'login']);
Route::get('logout', [SessionController::class, 'logout']);
