<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listastrabalhadore;
use DB;
class listastrabalhadoreController extends Controller
{
    public function getAll(){
        return listastrabalhadore::getLista();
    }

    public function show(listastrabalhadore $listastrabalhadore){
        return $listastrabalhadore;
    }

    public function store(Request $request){
        $listastrabalhadore = listastrabalhadore::create([
            'data'=>$request->input('data'),
            'quantidade'=>$request->input('quantidade'),
            'Produtos_id'=>$request->input('Produtos_id'),
            'worker_id'=>$request->input('worker_id'),
        ]);

        return $listastrabalhadore;
    }

    public function update(Request $request, listastrabalhadore $listastrabalhadore){

        $listastrabalhadore->data = $request->input('data');
        $listastrabalhadore->quantidade = $request->input('quantidade');
        $listastrabalhadore->Produtos_id = $request->input('Produtos_id');
        $listastrabalhadore->worker_id = $request->input('worker_id');
        $listastrabalhadore->save();
        return $listastrabalhadore;
    }

    public function delete(listastrabalhadore $listastrabalhadore){

        $listastrabalhadore->delete();

        return response()->json(['success'=>true]);
    }
}