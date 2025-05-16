<?php

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
    return view('auth.login');
});

Route::get('/', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('halamanLogin');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


// ADMIN
Route::middleware('auth')->group(function () {
    Route::get('/dashboard-admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
    // GURU
    Route::resource('guru', App\Http\Controllers\GuruController::class);
    
    // SISWA
    Route::resource('/siswa', App\Http\Controllers\SiswaController::class);
});
