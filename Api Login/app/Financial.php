<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Financial extends Model
{
    protected $primaryKey='id';
    protected $fillable = ['valor','descricao','tipo','data','pessoa'];

}