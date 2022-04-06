<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinalizacionController extends Controller
{
    //
    public function index(Request $request)
    {
       //trae todos los reguistros
       $finalizacion = -Finalizacion::all();
       return $finalizacion; 
    }

    public function store(Request $request)
    {
        $finalizacion = new Finalizacion();
        $finalizacion->Avances = $request->Avances;
        $finalizacion->Fecha_avance = $request->Fecha_avances;
        $finalizacion->Precio = $request->Precio;
        $finalizacion->created_at = $request->created_at;
        $finalizacion->update_at = $request->update_at;
        $finalizacion->save();

        return response()->json([
            "status" => 1,
            "msg" => "!Registro de finalizacion exitoso¡"
        ]);
    }
    public function update(Request $request, $id )
    {
        $finalizacion = Finalizacion::findOrFail($request->id);
        $finalizacion->Avances = $request->Avances;
        $finalizacion->Fecha_avance = $request->Fecha_avances;
        $finalizacion->Precio = $request->Precio;
        $finalizacion->created_at = $request->created_at;
        $finalizacion->update_at = $request->update_at;
        $finalizacion->save();
        return $finalizacion;
       
    }

    public function destroy(REquest $request, $id)

    {
        $finalizacion = Finalizacion::destroy($request->$id);
        return $finalizacion;
    }
}
