<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Produto extends Model
{
    protected $primaryKey='id';
    protected $fillable = ['nome','preco','descricao','unmedida','valmedida'];

}