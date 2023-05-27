<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Areas;
use App\Models\Subarea;
// use App\Controllers\AreasController;
use App\Models\Grandearea;

class SubareaController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $subareas = \DB::select('SELECT subarea.id, subarea.nome_subarea, area.nome_area, grandearea.nome_grandearea
        FROM subarea
        INNER JOIN area ON subarea.area_id = area.id
        INNER JOIN grandearea ON area.grande_area_id = grandearea.id');
        
        return view('subarea.index')->with('subareas', $subareas);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $grandeArea = Grandearea::all();
        $areas = Areas::all();
        return view('subarea.create')->with('grandeareas', $grandeArea)->with('areas', $areas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'opcao_a' => 'required',
            'opcao_ga' => 'required',
            'subarea'  => 'required'
        ]);

        $area = $request->input('opcao_a');
        $grandeArea = $request->input('opcao_ga');
        $subarea = $request->input('subarea');

        if(\DB::insert('INSERT INTO subarea (nome_subarea, area_id, grande_area_id ) VALUES (?, ?, ?)', [$subarea, $area, $grandeArea])){
            return redirect('/subarea');
        }else{ 
                return "Erro ao cadastrar";
        }

    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id) {
        $grandeareas = Grandearea::all();
        $areas = Areas::all();
        $subarea = Subarea::findOrFail($id);
    
        return view('subarea.edit', compact('grandeareas', 'areas', 'subarea'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $id = $id;  
        $subarea = $request->input('subarea');
        $area = $request->input('opcao_a');
        $grandearea = $request->input('opcao_ga'); 
    
        if(\DB::update("UPDATE subarea SET nome_subarea = '" . $subarea . "', grande_area_id = '" . $grandearea . "', area_id ='" . $area . "' WHERE id = ?", [$id])){
            return redirect('/subarea')->with('msg', 'Endereço editado com sucesso!');
        }else{ 
                return "Erro ao editar";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){

        if(\DB::table('subarea')->where('id', $id)->delete()){
            return redirect('/subarea')->with('msg', 'Excluída com sucesso!');
        }else{ 
               return "Erro ao excluir";
        } 
    }
}
