<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastrarClientes()
    {
        return view('clientes.cadastrar');
    }

    public function apiClientes(Request $request){
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiCreate(Request $request)
    {
        Cliente::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'sexo' => $request->sexo,
            'localidade_id' => $request->localidade_id,
            'data_nascimento' => \DateTime::createFromFormat("d-m-Y",$request->data_nascimento)
        ]);

        return "ok";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function apiUpdate(Request $request)
    {
        $new_data = [];

        if(!empty($request->nome) && strlen($request->nome)>0){
            $new_data['nome'] = $request->nome;
        }
        if(!empty($request->cpf) && strlen($request->cpf)>0){
            $new_data['cpf'] = $request->cpf;
        }
        if(!empty($request->sexo) && strlen($request->sexo)>0){
            $new_data['sexo'] = $request->sexo;
        }
        if(!empty($request->localidade_id) && strlen($request->localidade_id)>0){
            $new_data['localidade_id'] = $request->localidade_id;
        }
        if(!empty($request->data_nascimento) && strlen($request->data_nascimento)>0){
            $new_data['data_nascimento'] = \DateTime::createFromFormat("d-m-Y",$request->data_nascimento);
        }

        Cliente::where('id', $request->id)
        ->update($new_data);

        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function apiDestroy(Request $request)
    {
        Cliente::where('id', $request->id)->delete();

        return "ok";
    }
}
