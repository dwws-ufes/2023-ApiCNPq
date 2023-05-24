<?php

namespace App\Http\Controllers;

use App\Models\Grandearea;
use Illuminate\Http\Request;

class GrandeareaController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $grandeareas = \DB::select('SELECT * from grandearea');
        
        return view('grande_area.index')->with('grandeareas', $grandeareas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('grande_area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $grandeArea = new GrandeArea;
        $grandeArea = $request->input('grandeArea');

        if(\DB::insert('INSERT INTO grandearea (nome_grandearea) VALUES (?)', [$grandeArea])){
                return redirect('/grandearea');
        }else{ 
                return "Erro ao cadastrar";
        }

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $grandeArea = Grandearea::findOrFail($id); 

        return view('grande_area.edit')->with('grandearea', $grandeArea);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        
        $id = $id;  
        $grandeArea = $request->input('grandeArea');

        $grandearea = Grandearea::findOrFail($id);

        $grandearea->nome_grandearea = $grandeArea;
        if($grandearea->save()){
            return redirect('/grandearea')->with('msg', 'Grande área excluída com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id){
        if(\DB::table('grandearea')->where('id', $id)->delete()){
            return redirect('/grandearea')->with('msg', 'Grande área excluída com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
