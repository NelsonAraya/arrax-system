<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RrhhController;
use App\Http\Controllers\CiaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\GrupoSanguineoController;
use App\Http\Controllers\ClaveController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\MaterialMayorController;
use App\Http\Controllers\ActivacionController;
use App\Http\Controllers\BitacoraMaterialMayorController;
use App\Http\Controllers\FichaMedicaController;
use App\Http\Controllers\MyCiaController;


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

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('rrhh/{id}/verMat-Mayor',[RrhhController::class, 'verMaterialMayor'])->name('rrhh.mat-mayor')->middleware('role:rrhh');
    Route::put('rrhh/{id}/verMat-Mayor',[RrhhController::class, 'updateMaterialMayor'])->name('rrhh.mat-mayor-update')->middleware('role:rrhh');
    Route::get('rrhh/{id}/ver-permisos',[RrhhController::class, 'verPermisos'])->name('rrhh.permisos')->middleware('role:rrhh');
    Route::put('rrhh/{id}/ver-permisos',[RrhhController::class, 'updatePermisos'])->name('rrhh.permisos-update')->middleware('role:rrhh');
    Route::resource('rrhh', RrhhController::class)->middleware('role:rrhh');
    Route::resource('admin/cias', CiaController::class)->middleware('role:admin');
    Route::resource('admin/cargos', CargoController::class)->middleware('role:admin');
    Route::resource('admin/grup-sanguineo', GrupoSanguineoController::class)->middleware('role:admin');
    Route::resource('admin/claves', ClaveController::class)->middleware('role:admin');
    Route::resource('admin/especialidad', EspecialidadController::class)->middleware('role:admin');
    Route::resource('admin/mat-mayor', MaterialMayorController::class)->middleware('role:admin');
    Route::resource('activacion', ActivacionController::class)->middleware('role:activacion');
    Route::resource('bitacora', BitacoraMaterialMayorController::class)->middleware('role:bitacora');
    Route::resource('ficha-medica', FichaMedicaController::class)->middleware('role:ficha');
    Route::resource('my-cia', MyCiaController::class)->middleware('role:cia');
    
});

