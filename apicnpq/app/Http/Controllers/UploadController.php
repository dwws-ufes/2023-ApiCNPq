<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UploadController extends Controller{

    public function showUploadForm(){
        return view('upload.form');
    }


    public function processarArquivo(Request $request){
        // Verifica se um arquivo foi enviado
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            if ($file->isValid()) {
                // Move o arquivo para a pasta "uploads"
                $path = public_path('uploads');
                $filename = time() . '.' . $file->getClientOriginalExtension();


                $file->move($path, $filename);

                // Realiza a leitura do arquivo CSV
                $csvData = file_get_contents($path . '/' . $filename);
                // dd($csvData);
                // exit;
                $rows = explode("\n", $csvData);

                // $rows = implode("; ", $rows);
                // print_r( $rows) ;
                // exit;
                $tipo = $request->input('opcao');
                
                if($tipo == 'uf'){
                    // echo 'uf';
                    for($i = 1; $i<count($rows); $i++){
                        \DB::table('ufs')->insert(['sigla' => $rows[$i]]);
                        // print_r($rows[$i]);
                    } 
                }else if ($tipo == 'ga' ){
                    // echo 'ga';
                    for($i = 1; $i<count($rows); $i++){
                        \DB::table('grandearea')->insert(['nome_grandearea' => $rows[$i]]);
                        // print_r($rows[$i]);
                    } 
                }else{
                    // echo 'programas';
                    // for($i = 1; $i<count($rows); $i++){
                    //     \DB::table('programacnpq')->insert(['nome_programa' => $rows[$i]]);
                    //     // print_r($rows[$i]);
                    // } 
                    return response()->json(['error' => 'Nenhum arquivo enviado']);
                }
                // exit;
                
                return response()->json(['message' => 'Arquivo processado com sucesso']);
            }
        }

        return response()->json(['error' => 'Nenhum arquivo enviado']);
    }

}