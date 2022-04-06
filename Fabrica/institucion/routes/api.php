<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controller\ArticuloController;
use App\controller\API\RegisterController;
use App\controller\API\LoginController;
use App\controller\API\MateriaController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\EstudiantesController;
use App\Http\Controllers\API\FinalizacionController;
use App\Http\Controllers\API\RecursosController;
use APP\Http\Controllers\API\ProyectoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('userProfile', [UserController::class, 'UserProfile']);
Route::group( ['middleware' => ["auth:sanctum"]], function(){
    Route::get('userProfile', [UserController::class, 'UserProfile']);
});
Route::get('index', [MateriaController::class, 'index']);
Route::post('store', [MateriaController::class, 'store']);
Route::put('/Materia/{id}',[MateriaController::class,'update']);
Route::delete('/Materia/{id}',[MateriaController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('index', [Estudiantescontroller::class,'index']);
Route::post('store', [Estudiantescontroller::class, 'store']);
Route::put('/Estudiantes/{id}', [Estudiantescontroller::class, 'update']);
Route::delete('/Estudiantes/{id}',[Estudiantescontroller::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/Estudiantes', function (Request $request) {
    return $request->user();
});
Route::get('index', [ProyectoController::class,'index']);
Route::post('store', [ProyectoController::class, 'store']);
Route::put('/Estudiantes/{id}', [ProyectoController::class, 'update']);
Route::delete('/Estudiantes/{id}',[ProyectoController::class, 'destroy']);