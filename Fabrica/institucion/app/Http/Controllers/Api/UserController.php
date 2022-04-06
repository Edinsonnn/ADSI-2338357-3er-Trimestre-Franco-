<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function register (Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            "status" => 1,
            "msg" => "!Registro de usuario exitoso¡"
        ]);
    }
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where("email", "=", $request->email)->first();
        //revisamos si el id existe
        if(isset($user->id)){
            //revisamos la encriptacion
            if(Hash::check($request->password, $user->password)){
                //Creamos el token
                $token = $user->createToken("auth_token")->plainTextToken;
                //si está correcto
                return response()->json([
                    "status" =>1,
                    "msg" => "Usuario corectamente logeado",
                    "acess_token" => $token
                ]);
            }else{
                return response()->json([
                    "status" =>0,
                    "msg" => "password error"
                ]);
            }
        }else{
            return response()->json([
                "status" =>0,
                "msg" => "Error usuario"
            ]);

        }
    }
    public function userProfile(){
        return response()->json([
            "status" =>0,
            "msg" => "Acerca del perfil de usuario",
            "data" => auth()-user()
        ]);
    }
    public function logout(){
        
    }
}
