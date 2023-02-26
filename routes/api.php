<?php


use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Cliente;
use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('clientes')->group(function () {
    Route::get('/consultar',  [ClienteController::class, 'apiClientes']);
 
    Route::post('/cadastrar', [ClienteController::class, 'apiCreate']);

    Route::delete('/deletar', [ClienteController::class, 'apiDestroy']);

    Route::put('/editar', [ClienteController::class, 'apiUpdate']);

});

Route::prefix('localidades')->group(function () {
    Route::get('/estados', function () {
        return Estado::all();
    });
 
    Route::get('/cidades-por-estado', function (Request $request, Response $response) {

        $estado_id = null;

        $validated = $request->validate([
            'estado_id' => 'required'
        ]);

        if(!$validated){
            return Response::json(["sucesso"=>false, "Estado não encontrado."], 404);
        }else{
            return Cidade::where(["estado_id"=>$request->query('estado_id')])->get();
        }
        
    });
});