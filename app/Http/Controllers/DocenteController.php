<?php
namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function docentes()
    {
        // Obtener todos los docentes
        $docentes = Docente::all(); 
        return view('docentes', compact('docentes')); // Asegúrate de que el nombre de la vista sea correcto
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'programa' => 'required|string|max:255',
            'correo' => 'required|email|unique:docentes,correo',
            'celular' => 'nullable|string|max:15',
            'universidad' => 'required|string|max:255',
        ]);
    
        Docente::create($request->all());
    
        return redirect()->route('docentes')->with('success', 'Docente creado exitosamente!');
    }
    
}
