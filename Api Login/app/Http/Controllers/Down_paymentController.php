<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Down_payment;
use DB;
class Down_paymentController extends Controller
{
    public function getAll(){
        return down_payment::getDown();
    }

    public function show(down_payment $down_payment){
        return $down_payment;
    }

    public function store(Request $request){
        $down_payment = down_payment::create([
            'value'=>$request->input('value'),
            'date'=>$request->input('date'),
            'reason'=>$request->input('reason'),
            'worker_id'=>$request->input('worker_id'),
        ]);

        return $down_payment;
    }

    public function update(Request $request, down_payment $down_payment){

        $down_payment->value = $request->input('value');
        $down_payment->date = $request->input('date');
        $down_payment->reason = $request->input('reason');
        $down_payment->worker_id = $request->input('worker_id');
        $down_payment->save();
        return $down_payment;
    }

    public function delete(down_payment $down_payment){

        $down_payment->delete();

        return response()->json($down_payment);
    }
}