<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use DB;
class ProdutoController extends Controller
{
    public function getAll(){
        return Produto::all();
    }

    public function show(Produto $Produto){
        return $Produto;
    }

    public function store(Request $request){
        $Produto = Produto::create([
            'nome'=>$request->input('nome'),
            'preco'=>$request->input('preco'),
            'descricao'=>$request->input('descricao'),
            'unmedida'=>$request->input('unmedida'),
            'valmedida'=>$request->input('valmedida'),
        ]);

        return $Produto;
    }

    public function update(Request $request, Produto $Produto){

        $Produto->nome = $request->input('nome');
        $Produto->preco = $request->input('preco');
        $Produto->descricao = $request->input('descricao');
        $Produto->unmedida = $request->input('unmedida');
        $Produto->valmedida = $request->input('valmedida');
        $Produto->save();
        return $Produto;
    }

    public function delete(Produto $Produto){

        $Produto->delete();

        return response()->json(['success'=>true]);
    }
}