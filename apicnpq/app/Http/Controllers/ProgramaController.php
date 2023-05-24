<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Grandearea;

class ProgramaController extends Controller{
     /**
     * Display a listing of the resource.
     */
    public function index(){
        $programas = \DB::select('SELECT *
        FROM grandearea
        JOIN programacnpq ON programacnpq.grande_area_id = grandearea.id;');
        
        // dd($enderecos);

        return view('programa.index')->with('programas', $programas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grandeareas = Grandearea::all();
        return view('programa.create')->with('grandeareas', $grandeareas);

        // return view('programa.create')->with('grandearea', $grandeareas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $nomePrograma = $request->input('programa');
        $grandeareas = $request->input('opcao_ga');
        // dd($request->all());
              
        if(\DB::insert('INSERT INTO programacnpq (nome_programa, grande_area_id) VALUES  (?, ?)', [$nomePrograma, $grandeareas])){
            return redirect('/programa');
        }else{ 
            return "Erro ao cadastrar";
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $programa = Programa::findOrFail($id);
        $grandearea =  \DB::select('SELECT * FROM grandearea;');
        return view('programa.edit')->with('programa', $programa)->with('grandearea',$grandearea);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $id;  
        $programa = $request->input('programa');
        $grandearea = $request->input('opcao_ga'); 
    
        if(\DB::update("UPDATE programacnpq SET nome_programa = '" . $programa . "', grande_area_id = '" . $grandearea . "' WHERE id = ?", [$id])){
            return redirect('/programa')->with('msg', 'Endereço editado com sucesso!');
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
        if( \DB::table('programacnpq')->where('id', $id)->delete()){
            return redirect('/programa')->with('msg', 'Programa CNPq excluído com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
