<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        // echo 'ola mundo';
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
        $grandeArea = $request->input('grandeArea'); //salvar na tabela grande area
        $area = $request->input('area'); //salvar na table area
        $subarea = $request->input('subarea');

        if(\DB::insert('INSERT INTO areas (nome_grandearea, nome_area, nome_subarea) VALUES (?, ?, ?)', [$grandeArea , $area, $subarea])){
                return redirect('/areas');
        }else{ 
                return "Erro ao cadastrar";
        }

        // if(\DB::insert('INSERT INTO area (nome) VALUES (?)', [$area]) && \DB::insert('INSERT INTO grandearea (nome) VALUES (?)', [$grandeArea]) && \DB::insert('INSERT INTO subarea (nome) VALUES (?)', [$subarea])){
        //     return redirect('/areas');
        // }else{ 
        //     return "Erro ao cadastrar";
        // }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
