<?php


use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Cliente;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CIdadeController;
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
    Route::get('/estados', [EstadoController::class, 'apiEstados']);
    Route::get('/cidades-por-estado', [CidadeController::class, 'apiCidades']);
});