<?php

namespace App\Http\Controllers;

use App\Models\Uf;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class UfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ufs =  \DB::select('SELECT * FROM ufs;');

        return view('ufs.index')->with('ufs', $ufs);
    }

    /**
     * buscar população dbpedia
     */

     public function getResumo($uf)
{
    // Fazer a requisição à DBpedia e obter o resumo do UF
    // Você pode usar bibliotecas como cURL ou Guzzle para fazer a requisição

    // Exemplo de código usando a biblioteca Guzzle:
    $client = new \GuzzleHttp\Client();
    $response = $client->get('https://dbpedia.org/sparql', [
        'query' => [
            'query' => 'PREFIX dbpedia-owl: <http://dbpedia.org/ontology/>
                        PREFIX dbpedia: <http://dbpedia.org/resource/>

                        SELECT ?abstract
                        WHERE {
                          dbpedia:' . $uf . ' dbpedia-owl:abstract ?abstract .
                          FILTER (lang(?abstract) = "pt")
                        }'
        ],
        'headers' => [
            'Accept' => 'application/json'
        ]
    ]);

    $data = json_decode($response->getBody(), true);

    // Verificar se a resposta da DBpedia contém o resumo
    if (isset($data['results']['bindings'][0]['abstract']['value'])) {
        $resumo = $data['results']['bindings'][0]['abstract']['value'];

        // Retornar o resumo como resposta JSON
        return response()->json(['resumo' => $resumo]);
    }

    // Caso o resumo não seja encontrado, retornar uma resposta de erro
    return response()->json(['error' => 'Resumo não encontrado'], 404);
}
     


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ufs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siglaUf = $request->input('sigla');
       
        if(\DB::insert('INSERT INTO ufs (sigla) VALUES (?)', [$siglaUf])){
            return redirect('/enderecos/ufs');
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
        $uf = Uf::findOrFail($id);
        return view('ufs.edit')->with('uf', $uf);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $id;  
        $siglaUf = $request->input('sigla');
    
        if(\DB::update("UPDATE ufs SET sigla = '" . $siglaUf ."' WHERE id = ?", [$id])){
            return redirect('/enderecos/ufs')->with('msg', 'Uf editado com sucesso!');
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
        if(\DB::table('ufs')->where('id', $id)->delete()){
            return redirect('/enderecos/ufs')->with('msg', 'Uf excluído com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
