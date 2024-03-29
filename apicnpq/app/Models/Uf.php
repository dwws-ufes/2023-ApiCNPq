<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EasyRdf\Http\Client;
use EasyRdf\Sparql\Client as SparqlClient;

class Uf extends Model{
    use HasFactory;

    protected $fillable = [
        'sigla',
    ];

    public function fetchAndInsertDataFromDBpedia()
    {
        // Configuração da consulta SPARQL
        $sparqlEndpoint = 'https://dbpedia.org/sparql';
        $query = '
            PREFIX dbo: <http://dbpedia.org/ontology/>
            PREFIX dbr: <http://dbpedia.org/resource/>
            SELECT ?uf ?sigla
            WHERE {
                ?uf dbo:abbreviation ?sigla .
            }
        ';

        // Executa a consulta SPARQL
        $client = new SparqlClient($sparqlEndpoint);
        $result = $client->query($query);
        $rows = $result->rows();

        // Insere os dados no banco de dados
        foreach ($rows as $row) {
            $uf = new Uf();
            $uf->sigla = $row['sigla'];
            $uf->save();
        }
    }
}
