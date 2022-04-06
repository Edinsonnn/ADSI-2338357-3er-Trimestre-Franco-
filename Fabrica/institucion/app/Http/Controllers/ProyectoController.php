<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    //
    public function index(Request $request)
    {
      //trae todos los reguistros
      $proyecto = Proyecto::all();
      return $proyecto;  
    }

    public function store(Request $request)
    {
        $proyecto = new Proyecto();
        $proyecto->Avances = $request->Avances;
        $proyecto->Fecha_avance = $request->Fecha_avance;
        $proyecto->Precio = $request->Precio;
        $proyecto->created_at =  $request->created_at;
        $proyecto->update_at = $request->update_at;
        $proyecto->save();

        return response()->json([
            "status" => 1,
            "msg" => "!Registro de estudiante exitoso¡"
        ]);
    }

    public function update(Request $request, $id )
    {
        $estudiantes = Proyecto::findOrFail($request->id);
        $proyecto->Avances = $request->Avances;
        $proyecto->Fecha_avance = $request->Fecha_avance;
        $proyecto->Precio = $request->Precio;
        $proyecto->created_at =  $request->created_at;
        $proyecto->update_at = $request->update_at;
        $proyecto->save();
        return $proyecto;
       
    }

    public function destroy(REquest $request, $id)

    {
        $proyecto = Proyecto::destroy($request->$id);
        return $proyecto;
    }
}
