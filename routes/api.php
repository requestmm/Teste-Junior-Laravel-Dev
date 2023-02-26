<?php


use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Cliente;
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
    Route::get('/consultar', function (Request $request, Response $response) {
        $table_page = $request->table_page;
        return Cliente::with('cidade.estado')->where(function($query) use ($request){

            if(!empty($request->nome) && strlen($request->nome)>0){
                $query->where('nome', $request->nome);
            }
            if(!empty($request->cpf) && strlen($request->cpf)>0){
                $query->where('cpf', $request->cpf);
            }
            if(!empty($request->sexo) && strlen($request->sexo)>0){
                $query->where('sexo', $request->sexo);
            }
            if(!empty($request->localidade_id) && strlen($request->localidade_id)>0){
                $query->where('localidade_id', $request->localidade_id);
            }
            if(!empty($request->data_nascimento) && strlen($request->data_nascimento)>0){
                $query->where('data_nascimento', \DateTime::createFromFormat("d-m-Y",$request->data_nascimento));
            }
        })->simplePaginate(5,['*'],'page', $table_page);
    });
 
    Route::post('/cadastrar', function (Request $request, Response $response) {
        
        Cliente::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'sexo' => $request->sexo,
            'localidade_id' => $request->localidade_id,
            'data_nascimento' => \DateTime::createFromFormat("d-m-Y",$request->data_nascimento)
        ]);

        return "ok";
    
    });

    Route::delete('/deletar', function(Request $request, Response $response){


        Cliente::where('id', $request->id)->delete();

    });
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