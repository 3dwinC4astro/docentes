<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController; // Asegúrate de incluir esto
use App\Http\Controllers\DocenteController; 

// Ruta para la página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la lista de estudiantes
Route::get('/estudiantes', [EstudianteController::class, 'estudiantes']) 
->name('edwin.view');// Cambié 'edwin' a 'index'


Route::get('/docentes',[DocenteController::class, 'docentes']) 
->name('docentes.view');


Route::get('/docentes/create',[DocenteController::class, 'store']) 
->name('docentes.store');




