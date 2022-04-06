<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estudiantescontroller extends Controller
{
    //
    public function index(){
        //trae todos los reguistros
        $estudiantes = Estudiantes::all();
        return $estudiantes;
    }
    public function store(Request $request)
    {
        $estudiantes = new Estudiantes();
        $estudiantes->Nom_estudiante = $request->Nom_estudiante;
        $estudiantes->Ape_estudiante = $request->Ape_estudiante;
        $estudiantes->Direccion = $request->Direccion;
        $estudiantes->Telefono =  $request->Telefono;
        $estudiantes->Tipo_de_doc = $request->Tipo_de_doc;
        $estudiantes->Num_documento = $request->Num_documento;
        $estudiantes->created_at = $request->created;
        $estudiantes->updated_at = $request->update_at;
        $estudiantes->save();

        return response()->json([
            "status" => 1,
            "msg" => "!Registro de estudiante exitoso¡"
        ]);
    }

    public function update(Request $request, $id )
    {
        $estudiantes = Estudiantes::findOrFail($request->id);
        $estudiantes->Nom_estudiante = $request->Nom_estudiante;
        $estudiantes->Ape_estudiante = $request->Ape_estudiante;
        $estudiantes->Direccion = $request->Direccion;
        $estudiantes->Telefono =  $request->Telefono;
        $estudiantes->Tipo_de_doc = $request->Tipo_de_doc;
        $estudiantes->Num_documento = $request->Num_documento;
        $estudiantes->created_at = $request->created;
        $estudiantes->updated_at = $request->update_at;
        $estudiantes->save();
        return $estudiantes;
       
    }

    public function destroy(REquest $request, $id)

    {
        $estudiantes = Estudiantes::destroy($request->$id);
        return $estudiantes;
    }
}
