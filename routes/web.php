<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilrumahsakitController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    
    Route::resource('login', LoginController::class);
});

Route::resource('profilrumahsakit', ProfilrumahsakitController::class);
Route::get('/filter-rumah-sakit', [ProfilRumahSakitController::class, 'filterRumahSakit']);

//hapus data
Route::delete('/delete_rumahsakit/{id}', [ProfilrumahsakitController::class, 'destroy'])->name('delete.rumahsakit');

Route::resource('pasien', PasienController::class);
//hapus data
Route::delete('/delete_pasien/{id}', [PasienController::class, 'destroy'])->name('delete.pasien');


//logout
Route::post('/logout', [LoginController::class, 'logout']);

