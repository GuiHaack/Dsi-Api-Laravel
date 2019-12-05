<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class listastrabalhadore extends Model
{
    protected $primaryKey='id';
    protected $fillable = ['data','quantidade','Produtos_id','worker_id'];

    public static function getLista(){
        $lista=DB::table('ListasTrabalhadores')
        ->join('workers', 'workers.id' , '=' ,'ListasTrabalhadores.worker_id')
        ->join('Produtos', 'Produtos.id' , '=' ,'ListasTrabalhadores.produtos_id')
        ->select('workers.id','workers.name','workers.function','workers.document','workers.receive',
        'Produtos.id','Produtos.nome','Produtos.preco','Produtos.descricao','Produtos.unmedida','Produtos.valmedida',
        'ListasTrabalhadores.id','ListasTrabalhadores.data','ListasTrabalhadores.quantidade','ListasTrabalhadores.Produtos_id','ListasTrabalhadores.worker_id')
        ->get();
        return $lista;
    }
}