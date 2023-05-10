<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;


class AreaController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $areas = \DB::select('SELECT * from areas');
        // $areas = \DB::select('SELECT ar.nome, sa.nome, ga.nome FROM area AS ar INNER JOIN subarea as sa on ar.id =sa.id INNER JOIN grandearea as ga on ar.id = ga.id');
        
        return view('areas.index')->with('areas', $areas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $grandeArea = $request->input('grandeArea'); 
        $area = $request->input('area'); 
        $subarea = $request->input('subarea');

        if(\DB::insert('INSERT INTO areas (nome_grandearea, nome_area, nome_subarea) VALUES (?, ?, ?)', [$grandeArea , $area, $subarea])){
                return redirect('/areas');
        }else{ 
                return "Erro ao cadastrar";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $area = Areas::findOrFail($id); 
        return view('areas.edit')->with('area', $area);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        
        $id = $id;  
        $grandeArea = $request->input('grandeArea');
        $area = $request->input('area'); 
        $subarea = $request->input('subarea');
    
        if(\DB::update("UPDATE areas SET nome_grandearea = '" . $grandeArea . "', nome_area = '" . $area . "', nome_subarea = '" . $subarea . "' WHERE id = ?", [$id])){
            return redirect('/areas')->with('msg', 'Área editada com sucesso!');
        }else{ 
                return "Erro ao editar";
        }
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id){
        if(\DB::table('areas')->where('id', $id)->delete()){
            return redirect('/areas')->with('msg', 'Área excluída com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
