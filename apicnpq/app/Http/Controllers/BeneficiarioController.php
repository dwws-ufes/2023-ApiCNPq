<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficiario;


class BeneficiarioController extends Controller
{
    public function index()
    {
        $beneficiario = \DB::select('SELECT beneficiario.id, bolsas.protocolo, programacnpq.nome_programa,
        beneficiario.nome_beneficiario, enderecos.pais, instituicaos.nome_instituuicao
        FROM enderecos
        JOIN beneficiario ON beneficiario.endereco_id = enderecos.id
        JOIN programacnpq ON beneficiario.programacnpq_id=programacnpq.id
        JOIN instituicaos ON beneficiario.instituicao_id = instituicaos.id
        JOIN bolsas ON beneficiario.bolsa_id = bolsas.id;');
        
        // dd($beneficiario);

        return view('beneficiario.index')->with('beneficiarios', $beneficiario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enderecos =  \DB::select('SELECT * FROM enderecos;');
        $programas = \DB::select('SELECT * FROM programacnpq;');
        $instituicaos = \DB::select('SELECT * FROM instituicaos;');
        $bolsas = \DB::select('SELECT * FROM bolsas;');

        return view('beneficiario.create')->with('enderecos', $enderecos)->with('programas', $programas)->with('instituicaos', $instituicaos)->with('bolsas', $bolsas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $nomebeneficiario = $request->input('nome_beneficiario');
        $programabeneficiario = $request->input('programa');
        $enderecobeneficiario = $request->input('endereco');
        $instituicaobeneficiario = $request->input('instituicao');
        $bolsabeneficiario = $request->input('bolsa');
        // dd($request->all());
              
        if(\DB::insert('INSERT INTO beneficiario (nome_beneficiario, programacnpq_id, endereco_id, instituicao_id, bolsa_id) 
        VALUES  (?, ?, ?, ?, ?)', [$nomebeneficiario, $programabeneficiario, $enderecobeneficiario, $instituicaobeneficiario, $bolsabeneficiario])){
            return redirect('/beneficiarios');
        }else{ 
            return "Erro ao cadastrar";
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $beneficiario = Beneficiario::findOrFail($id);
        $enderecos =  \DB::select('SELECT * FROM enderecos;');
        $programas = \DB::select('SELECT * FROM programacnpq;');
        $instituicaos = \DB::select('SELECT * FROM instituicaos;');
        $bolsas = \DB::select('SELECT * FROM bolsas;');
        return view('beneficiario.edit')->with('beneficiarios', $beneficiario)->with('enderecos', $enderecos)->with('programas', $programas)->with('instituicaos', $instituicaos)->with('bolsas', $bolsas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $id;  
        $nomebeneficiario = $request->input('nome_beneficiario');
        $programabeneficiario = $request->input('programa');
        $enderecobeneficiario = $request->input('endereco');
        $instituicaobeneficiario = $request->input('instituicao');
        $bolsabeneficiario = $request->input('bolsa');
    
        if(\DB::update("UPDATE beneficiario SET nome_beneficiario = '" . $nomebeneficiario . "', programacnpq_id = '" . $programabeneficiario . "',
        instituicao_id = '" . $instituicaobeneficiario . "', bolsa_id = '" . $bolsabeneficiario . "',
        endereco_id = '" . $enderecobeneficiario . "' WHERE id = ?", [$id])){
            return redirect('/beneficiarios')->with('msg', 'Beneficiario editado com sucesso!');
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
        if( \DB::table('beneficiario')->where('id', $id)->delete()){
            return redirect('/beneficiarios')->with('msg', 'Beneficiario excluído com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}