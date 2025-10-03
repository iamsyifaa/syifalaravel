<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SessionController;

// route untuk tamu (belum login)
Route::middleware('iniTamu')->group(function () {
    Route::get('sesi', [SessionController::class,'index'])->name('login');
    Route::post('sesi/login', [SessionController::class,'login']);
});

// logout bisa diakses setelah login
Route::get('sesi/logout', [SessionController::class,'logout'])->name('logout');

// route yang butuh login
Route::middleware('iniLogin')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/tampilan', function () {
        return view('tampilan');
    });

    Route::resource('departemen', DepartemenController::class)->middleware('iniLogin');
    Route::resource('karyawan', KaryawanController::class)->middleware('iniLogin');
});
