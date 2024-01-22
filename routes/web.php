<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterControllers;
use App\Http\Controllers\RuanganControllers;

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
    return view('welcome');
});
Route::resource('dktr', DokterControllers::class);
Route::resource('ruangan', RuanganControllers::class);
Route::resource('pasien', RuanganControllers::class);
