<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\EmpleoController;

////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////oferta de trabajo//////////////////////////
// Ruta para mostrar todos los empleos
Route::get('/empleo/showempleo', [EmpleoController::class, 'index'])->name('empleos.showempleo');


// Ruta para mostrar el formulario de creación
Route::get('/empleo/create', [EmpleoController::class, 'create'])->name('empleo.create');

// Ruta para guardar la nueva oferta de trabajo
Route::post('/empleo', [EmpleoController::class, 'store'])->name('empleo.store');

// Ruta para mostrar el formulario de edición de una oferta de trabajo
Route::get('/empleo/{id}/edit', [EmpleoController::class, 'edit'])->name('empleo.edit');

// Ruta para actualizar una oferta de trabajo
Route::put('/empleo/{id}', [EmpleoController::class, 'update'])->name('empleo.update');

// Ruta para eliminar una oferta de trabajo
Route::delete('/empleo/{id}', [EmpleoController::class, 'destroy'])->name('empleo.destroy');
///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////habilidades//////////////////////
use App\Http\Controllers\HabilidadController;

Route::get('/habilidades', [HabilidadController::class, 'index'])->name('habilidades.index');
Route::get('/habilidades/create', [HabilidadController::class, 'create'])->name('habilidades.create');
Route::post('/habilidades', [HabilidadController::class, 'store'])->name('habilidades.store');
Route::get('/habilidades/{id}/edit', [HabilidadController::class, 'edit'])->name('habilidades.edit');
Route::put('/habilidades/{id}', [HabilidadController::class, 'update'])->name('habilidades.update');
Route::delete('/habilidades/{id}', [HabilidadController::class, 'destroy'])->name('habilidades.destroy');


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////empresas//////////////////////


use App\Http\Controllers\EmpresaController;


Route::get('/empresas/show', [EmpresaController::class, 'index'])->name('empresas.show'); 


// Ruta para mostrar el formulario de creación de empresa
Route::get('empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');

// Ruta para guardar la empresa (POST)
Route::post('empresas', [EmpresaController::class, 'store'])->name('empresas.store');

Route::get('/empresas/{id}/edit', [EmpresaController::class, 'edit'])->name('empresas.edit');

// Ruta para actualizar una empresa (update)
Route::put('/empresas/{id}', [EmpresaController::class, 'update'])->name('empresas.update');

// Ruta para eliminar una empresa (destroy)
Route::delete('/empresas/{id}', [EmpresaController::class, 'destroy'])->name('empresas.destroy');
