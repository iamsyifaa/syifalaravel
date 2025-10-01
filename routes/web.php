<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController; 
use App\Http\Controllers\SessionController;

Route::get('sesi', [SessionController::class,'index'])->name('login');
Route::post('sesi/login', [SessionController::class,'login']);
Route::get('sesi/logout', [SessionController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/tampilan', function () {
        return view('tampilan');
    });

    Route::resource('departemen', DepartemenController::class);
});
