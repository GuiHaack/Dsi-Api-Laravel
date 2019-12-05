<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Worker extends Model
{
    protected $primaryKey='id';
    protected $fillable = ['name','function','document','receive'];

}