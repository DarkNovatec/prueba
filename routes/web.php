<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'fnIndex'])-> name ('xIndex');

Route::middleware(['auth:sanctum','verified'])->post('/', [PagesController::class, 'fnRegistrar'])-> name ('Estudiante.xRegistrar');

Route::middleware(['auth:sanctum','verified'])->get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])-> name ('Estudiante.xActualizar');

Route::middleware(['auth:sanctum','verified'])->put('/actualizar/{id}', [PagesController::class, 'fnUpdate'])-> name ('Estudiante.xUpdate');

Route::middleware(['auth:sanctum','verified'])->delete('/eliminar/{id}', [PagesController::class, 'fnEliminar']) -> name('Estudiante.xEliminar');

Route::middleware(['auth:sanctum','verified'])->get('detalle/{id}', [PagesController::class, 'fnEstDetalle'])-> name ('Estudiante.xDetalle');

Route::middleware(['auth:sanctum','verified'])->get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero','[0-9]+')->name('xGaleria');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', [PagesController::class, 'fnLista'])-> name ('dashboard');


///////// ARRIBAa////
//Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
//Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
//});