<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\EmpleoController;

//oferta de trabajo
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

