<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UfController;

class EnderecoController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enderecos =  \DB::select('SELECT * FROM endereco;');

        return view('enderecos.index')->with('enderecos', $enderecos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ufs =  \DB::select('SELECT * FROM uf;');

        return view('enderecos.create')->with('ufs', $ufs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $paisEndereco = $request->input('pais');
        $siglaEndereco = $request->input('opcao');
        // dd($request->all());
              
        if(\DB::insert('INSERT INTO endereco (pais, uf_id) VALUES  (?, ?)', [$paisEndereco, $siglaEndereco])){
            return redirect('/enderecos');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo $id;
        if(\DB::table('endereco')->where('id', $id)->delete()){
            return redirect('/enderecos')->with('msg', 'endereco excluído com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
