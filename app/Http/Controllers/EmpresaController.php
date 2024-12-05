<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.show', compact('empresas'));
    }

    public function create()
    {
        return view('empresas.create');
    }

    // Método para guardar la empresa en la base de datos
    public function store(Request $request)
    {
        // Validar los datos
        $data = $request->validate([
            'usuario' => 'required|string|max:255',
            'contrasena' => 'nullable|string|min:8',
            'nombre_empresa' => 'required|string|max:100',
            'pagina_web' => 'nullable|url',
            'descripcion_empresa' => 'required|string',
            'activida_empresa' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'pais' => 'required|string|max:50',
            'codigo_area' => 'required|string|max:10',
        ]);
        
        // Crear la nueva empresa
        Empresa::create([
            'usuario' => $request->usuario,
            'contrasena' => $request->contrasena,
            'nombre_empresa' => $request->nombre_empresa,
            'pagina_web' => $request->pagina_web,
            'descripcion_empresa' => $request->descripcion_empresa,
            'activida_empresa' => $request->activida_empresa,
            'email' => $request->email,
            'pais' => $request->pais,
            'codigo_area' => $request->codigo_area,
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->route('empresas.show', ['id' => Empresa::latest()->first()->id])->with('success', 'Empresa creada con éxito.');
    }



     // Método para mostrar el formulario de edición de una empresa
     public function edit($id)
     {
         $empresa = Empresa::findOrFail($id);
         return view('empresas.edit', compact('empresa'));
     }
 
     // Método para actualizar los datos de la empresa
     public function update(Request $request, $id)
     {
         $empresa = Empresa::findOrFail($id);
         $empresa->update($request->all());
         return redirect()->route('empresas.show')->with('success', 'Empresa actualizada correctamente');
     }
 
     // Método para eliminar una empresa
     public function destroy($id)
     {
         $empresa = Empresa::findOrFail($id);
         $empresa->delete();
         return redirect()->route('empresas.show')->with('success', 'Empresa eliminada correctamente');
     }
 
}
