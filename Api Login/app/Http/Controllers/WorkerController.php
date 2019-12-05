<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use DB;
class WorkerController extends Controller
{
    public function getAll(){
        return Worker::all();
    }

    public function show(Worker $Worker){
        return $Worker;
    }

    public function store(Request $request){
        $Worker = Worker::create([
            'name'=>$request->input('name'),
            'function'=>$request->input('function'),
            'document'=>$request->input('document'),
            'receive'=>$request->input('receive'),
        ]);

        return $Worker;
    }

    public function update(Request $request, Worker $Worker){

        $Worker->name = $request->input('name');
        $Worker->function = $request->input('function');
        $Worker->document = $request->input('document');
        $Worker->receive = $request->input('receive');
        $Worker->save();
        
        return $Worker;
    }

    public function delete(Worker $Worker){

        $Worker->delete();

        return response()->json(['success'=>true]);
    }
}