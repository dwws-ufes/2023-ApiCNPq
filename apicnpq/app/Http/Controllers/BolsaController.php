<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bolsas;


class BolsaController extends Controller
{
    public function index()
    {
        $bolsas = \DB::select('SELECT bolsas.id,bolsas.protocolo, programacnpq.nome_programa, bolsas.data_inicio, bolsas.data_fim,
        bolsas.valor_bolsa, enderecos.pais
        FROM enderecos
        JOIN bolsas ON bolsas.endereco_id = enderecos.id
        JOIN programacnpq ON bolsas.programacnpq_id=programacnpq.id;');
        
        // dd($bolsas);

        return view('bolsas.index')->with('bolsas', $bolsas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enderecos =  \DB::select('SELECT * FROM enderecos;');
        $programas = \DB::select('SELECT * FROM programacnpq;');

        return view('bolsas.create')->with('enderecos', $enderecos)->with('programas', $programas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $protocolobolsa = $request->input('protocolo');
        $programabolsa = $request->input('programa');
        $dataIbolsa = $request->input('datainicio');
        $dataFbolsa = $request->input('datafim');
        $valorbolsa = $request->input('valor');
        $enderecobolsa = $request->input('endereco');
        // dd($request->all());
              
        if(\DB::insert('INSERT INTO bolsas (protocolo, programacnpq_id, data_inicio, data_fim, valor_bolsa, endereco_id) 
        VALUES  (?, ?, ?, ?, ?, ?)', [$protocolobolsa, $programabolsa, $dataIbolsa, $dataFbolsa, $valorbolsa, $enderecobolsa])){
            return redirect('/bolsas');
        }else{ 
            return "Erro ao cadastrar";
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bolsa = Bolsas::findOrFail($id);
        $enderecos =  \DB::select('SELECT * FROM enderecos;');
        $programas = \DB::select('SELECT * FROM programacnpq;');
        return view('bolsas.edit')->with('bolsas', $bolsa)->with('enderecos', $enderecos)->with('programas', $programas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $id;  
        $protocolobolsa = $request->input('protocolo');
        $programabolsa = $request->input('programa');
        $dataIbolsa = $request->input('datainicio');
        $dataFbolsa = $request->input('datafim');
        $valorbolsa = $request->input('valor');
        $enderecobolsa = $request->input('endereco'); 
    
        if(\DB::update("UPDATE bolsas SET protocolo = '" . $protocolobolsa . "', programacnpq_id = '" . $programabolsa . "',
        data_inicio = '" . $dataIbolsa . "', data_fim = '" . $dataFbolsa . "', valor_bolsa = '" . $valorbolsa . "',
         endereco_id = '" . $enderecobolsa . "' WHERE id = ?", [$id])){
            return redirect('/bolsas')->with('msg', 'Bolsa editado com sucesso!');
        }else{ 
                return "Erro ao editar";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // echo $id
        if( \DB::table('bolsas')->where('id', $id)->delete()){
            return redirect('/bolsas')->with('msg', 'Bolsa excluído com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
