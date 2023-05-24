<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Areas;
use App\Models\Subarea;
// use App\Controllers\AreasController;
use App\Models\Grandearea;

class SubareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $subareas = \DB::select('SELECT sb.id, sb.nome_subarea, sb.area_id, sb.grande_area_id, ar.nome_area, ga.nome_grandearea, ga.id, ar.id 
        FROM subarea AS sb 
        INNER JOIN area as ar ON sb.area_id = ar.id 
        INNER JOIN grandearea as ga ON sb.grande_area_id = ga.id;');
        
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
    // public function edit(string $id){
    //     $grandeAreas = Grandearea::all();
    //     $area = Areas::all();
    //     $subarea = Subarea::findOrFail($id);
    
    //     //return view('subarea.edit', compact('grandeAreas', 'area', 'subarea'));
    //     return view('subarea.edit')->with('subarea', $subarea)->with('areas', $areas)->with('grandeAreas', $grandeAreas);
    // }
    public function edit(string $id) {
        $grandeAreas = Grandearea::all();
        $areas = Areas::all();
        $subarea = Subarea::findOrFail($id);
    
        return view('subarea.edit', compact('grandeAreas', 'areas', 'subarea'));
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
    public function destroy(int $id){
        // echo $id;
        $subarea = Subarea::findOrFail($id);
        // $subarea->delete();
        
        if(\DB::table('subarea')->where('id', $id)->delete()){
            return redirect('/subarea')->with('msg', 'Excluída com sucesso!');
        }else{ 
               return "Erro ao excluir";
        } 
    }
}
