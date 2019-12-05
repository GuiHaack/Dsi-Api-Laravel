<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Down_payment extends Model
{
    protected $primaryKey='id';
    protected $fillable = ['value','date','reason','worker_id'];

    public static function getDown(){
        $down_payments=DB::table('down_payments')
        ->join('workers', 'workers.id' , '=' ,'down_payments.worker_id')
        ->select('workers.id','workers.name','workers.function','workers.document','workers.receive',
        'down_payments.id','down_payments.value','down_payments.date','down_payments.reason','down_payments.worker_id')
        ->get();
        return $down_payments;
    }
}