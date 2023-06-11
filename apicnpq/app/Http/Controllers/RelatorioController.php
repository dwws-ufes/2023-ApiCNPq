<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller{
    
    public function gerarRelatorio(){
      
        $quantidadeBeneficiarios = \DB::table('beneficiario')->count();

        $valorTotalBolsasCadastradas = \DB::table('bolsas')->sum('valor_bolsa');

        $valorTotalBolsas = DB::table('bolsas')
        ->join('beneficiario', 'bolsas.id', '=', 'beneficiario.bolsa_id')
        ->sum('bolsas.valor_bolsa');
        
        return view('relatorio.relatoriobolsas')->with('quantidadeBeneficiarios', $quantidadeBeneficiarios)->with('valorTotalBolsasCadastradas', $valorTotalBolsasCadastradas)->with('valorTotalBolsas', $valorTotalBolsas);
    }
}
