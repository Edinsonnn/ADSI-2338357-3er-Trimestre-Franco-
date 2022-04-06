<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursosController extends Controller
{
    //
    public function index(Request $request)
    {
      //trae todos los reguistros
      $recursos = Recursos::all();
      return $recursos;  
    }

    public function store(Request $request)
    {
        $recursos = new Recursos();
        $recursos->Nombre_recurso = $request->Nombre_recursos;
        $recursos->Tipo = $request->Tipo;
        $recursos->created_at =  $request->created_at;
        $recursos->update_at = $request->update_at;
        $recursos->save();

        return response()->json([
            "status" => 1,
            "msg" => "!Registro de recurso exitoso¡"
        ]);
    }

    public function update(Request $request, $id )
    {
        $estudiantes = Recursos::findOrFail($request->id);
        $recursos->Nombre_recurso = $request->Nombre_recursos;
        $recursos->Tipo = $request->Tipo;
        $recursos->created_at =  $request->created_at;
        $recursos->update_at = $request->update_at;
        $recursos->save();
        return $recursos;
       
    }

    public function destroy(REquest $request, $id)

    {
        $recursos = Recusrsos::destroy($request->$id);
        return $recursos;
    }
    
}
