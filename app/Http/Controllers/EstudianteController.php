<?php
namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function estudiantes()
    {
        $estudiantes = Estudiante::all(); // Obtiene todos los estudiantes
        return view('edwin', compact('estudiantes')); // Pasa la variable a la vista
    }
}
