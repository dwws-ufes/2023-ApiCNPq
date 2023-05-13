<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ufs =  \DB::select('SELECT * FROM uf;');

        return view('ufs.index')->with('ufs', $ufs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ufs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siglaUf = $request->input('sigla');
       
        if(\DB::insert('INSERT INTO uf (sigla) VALUES (?)', [$siglaUf])){
            return redirect('/enderecos/ufs');
        }else{ 
            return "Erro ao cadastrar";
        }
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
        echo $id;
        if(\DB::table('uf')->where('id', $id)->delete()){
            return redirect('/enderecos/ufs')->with('msg', 'Uf excluído com sucesso!');
        }else{ 
                return "Erro ao excluir";
        }
    }
}
