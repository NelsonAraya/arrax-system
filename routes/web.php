<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RrhhController;
use App\Http\Controllers\CiaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\GrupoSanguineoController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('rrhh', RrhhController::class);
Route::resource('admin/cias', CiaController::class);
Route::resource('admin/cargos', CargoController::class);
Route::resource('admin/grup-sanguineo', GrupoSanguineoController::class);
