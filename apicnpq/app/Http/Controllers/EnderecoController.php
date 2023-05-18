<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enderecos;

class EnderecoController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enderecos =  \DB::select('SELECT * FROM enderecos INNER JOIN ufs ON enderecos.uf_id = ufs.id;');

        return view('enderecos.index')->with('enderecos', $enderecos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ufs =  \DB::select('SELECT * FROM ufs;');

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
              
        if(\DB::insert('INSERT INTO enderecos (pais, uf_id) VALUES  (?, ?)', [$paisEndereco, $siglaEndereco])){
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
        $endereco = Enderecos::findOrFail($id);
        $ufs =  \DB::select('SELECT * FROM ufs;');
        return view('enderecos.edit')->with('enderecos', $endereco)->with('ufs',$ufs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $id;  
        $paisEndereco = $request->input('pais');
        $siglaEndereco = $request->input('opcao'); 
    
        if(\DB::update("UPDATE enderecos SET pais = '" . $paisEndereco . "', uf_id = '" . $siglaEndereco . "' WHERE id = ?", [$id])){
            return redirect('/enderecos')->with('msg', 'Endereço editado com sucesso!');
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
        if(\DB::table('enderecos')->where('id', $id)->delete()){
            return redirect('/enderecos')->with('msg', 'Endereço excluído com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
