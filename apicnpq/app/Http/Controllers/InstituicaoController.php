<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instituicaos;

class InstituicaoController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instituicaos =  \DB::select('SELECT * FROM enderecos INNER JOIN instituicaos ON instituicaos.endereco_id = enderecos.id;');

        return view('instituicaos.index')->with('instituicaos', $instituicaos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enderecos =  \DB::select('SELECT * FROM enderecos;');

        return view('instituicaos.create')->with('enderecos', $enderecos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $nomeinstituicao = $request->input('nome');
        $endinstituicao = $request->input('endereco');
        // dd($request->all());
              
        if(\DB::insert('INSERT INTO instituicaos (nome_instituuicao, endereco_id) VALUES  (?, ?)', [$nomeinstituicao, $endinstituicao])){
            return redirect('/instituicoes');
        }else{ 
            return "Erro ao cadastrar";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $instituicao = Instituicaos::findOrFail($id);
        $enderecos =  \DB::select('SELECT * FROM enderecos;');
        return view('instituicaos.edit')->with('instituicaos', $instituicao)->with('enderecos',$enderecos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $id;  
        $nomeinstituicao = $request->input('nome');
        $endinstituicao = $request->input('endereco'); 
    
        if(\DB::update("UPDATE instituicaos SET nome_instituuicao = '" . $nomeinstituicao . "', endereco_id = '" . $endinstituicao . "' WHERE id = ?", [$id])){
            return redirect('/instituicoes')->with('msg', 'Instituição editado com sucesso!');
        }else{ 
                return "Erro ao editar";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo $id;
        if(\DB::table('instituicaos')->where('id', $id)->delete()){
            return redirect('/instituicoes')->with('msg', 'Instituição excluído com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
