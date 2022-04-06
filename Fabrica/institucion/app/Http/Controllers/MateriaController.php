<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    //
    public function index(){
        //trae todos los reguistros
        $materia = Materia::all();
        return $materia;
    }

    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->nombre = $request->nombre;
        $materia->descripcion = $request->descripcion;
        $materia->save();

        return response()->json([
            "status" => 1,
            "msg" => "!Registro de materia exitoso¡"
        ]);
    }

    public function update(Request $request, $id )
    {
        $materia = Materia::findOrFail($request->id);
        $materia->nombre = $request->nombre;
        $materia->descripcion = $request->descripcion;
        $materia->save();
        return $materia;
       
    }

    public function destroy(REquest $request, $id)

    {
        $materia = Materia::destroy($request->$id);
        return $materia;
    }
}
