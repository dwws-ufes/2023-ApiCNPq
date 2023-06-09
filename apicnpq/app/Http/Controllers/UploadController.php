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
                $tamanho = count($rows);
               
                // $rows = implode("; ", $rows);
                // print_r( $rows) ;
                foreach ($rows as $row) {
                    $data = str_getcsv($row, ';');
                    // print_r($data);

                    \DB::table('ufs')->insert(['sigla' => $data]);

                    return response()->json(['message' => 'Arquivo processado com sucesso']);
                }     
            }
        }

        return response()->json(['error' => 'Nenhum arquivo enviado']);
    }

}
