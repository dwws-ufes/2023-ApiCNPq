<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;
use App\Models\Grandearea;

class AreaController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $areas = \DB::select('SELECT ar.id, ar.nome_area, ga.nome_grandearea
        FROM area AS ar
        INNER JOIN grandearea AS ga ON ar.grande_area_id = ga.id;');
        
        return view('areas.index')->with('areas', $areas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $grandeArea = Grandearea::all();
        return view('areas.create')->with('grandeareas', $grandeArea);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
       
        $validatedData = $request->validate([
            'opcao' => 'required',
            'area'  => 'required'
        ]);

       
        $area = $request->input('area');
        $grandeArea = $request->input('opcao');
        
        if(\DB::insert('INSERT INTO area (nome_area, grande_area_id) VALUES (?, ?)', [$area, $grandeArea])){
                return redirect('/areas');
        }else{ 
                return "Erro ao cadastrar";
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $grandeArea = Grandearea::all();
        $area = Areas::findOrFail($id); 
        return view('areas.edit')->with('area', $area)->with('grandeareas', $grandeArea);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'opcao' => 'required',
            'area'  => 'required'
        ]);

        // echo "update";
        
        $id = $id;  
        $grandeArea = $request->input('opcao');
        $area = $request->input('area'); 
        // $subarea = $request->input('subarea');
    
        if(\DB::update("UPDATE area SET grande_area_id = '" . $grandeArea . "', nome_area = '" . $area . "' WHERE id = ?", [$id])){
            return redirect('/areas')->with('msg', 'Área editada com sucesso!');
        }else{ 
                return "Erro ao editar";
        }
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id){
        if(\DB::table('area')->where('id', $id)->delete()){
            return redirect('/areas')->with('msg', 'Área excluída com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
