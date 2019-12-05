<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Financial;
use DB;
class FinancialController extends Controller
{
    public function getAll(){
        return Financial::all();
    }

    public function show(Financial $Financial){
        return $Financial;
    }

    public function store(Request $request){
        $Financial = Financial::create([
            'valor'=>$request->input('valor'),
            'descricao'=>$request->input('descricao'),
            'tipo'=>$request->input('tipo'),
            'data'=>$request->input('data'),
            'pessoa'=>$request->input('pessoa'),
        ]);
        
        return $Financial;
    }

    public function update(Request $request, Financial $Financial){

        $Financial->valor = $request->input('valor');
        $Financial->descricao = $request->input('descricao');
        $Financial->tipo = $request->input('tipo');
        $Financial->data = $request->input('data');
        $Financial->pessoa = $request->input('pessoa');
        $Financial->save();
        return $Financial;
    }

    public function delete(Financial $Financial){

        $Financial->delete();

        return response()->json(['success'=>true]);
    }
}