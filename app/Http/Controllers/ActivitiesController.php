<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Activity;

class ActivitiesController extends Controller
{

    public function index()
    {
 
        $activities = DB::table('activities')
        ->where('excluido', '=', FALSE)
        ->orderBy('id','asc')->get();
    	return view('todo.list',compact('activities'));
    }

    public function add(Request $request)
    {

        // SALVAR DADOS NO BANCO DE DADOS
        $validator = Validator::make($request->all(), [
            'nome' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json(['status'=>'error','message'=>$validator->errors()->first()]);
        }

        $id = DB::table('activities')->insertGetId(
            [
                'nome' => $request->input('nome'), 
                'excluido' => FALSE,
                'concluido' => FALSE
            ]
        );

        $dados['id'] = $id;
        $dados['nome'] = $request->input('nome');

        $returnHTML = view('todo.add')->with(compact('dados'))->render();
        return response()->json(['message'=>$returnHTML, 'status'=>"success"]);

    }

    public function edit(Request $request)
    {

        try{

            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json(['status'=>'error','message'=>$validator->errors()->first()]);
            }

            DB::table('activities')
                ->where('id', $request->input('id'))
                ->update(['nome' => $request->input('name')]);

            return response()->json(['message'=>"Atividade alterada com sucesso!", 'status'=>"success"]);

        }catch(\Illuminate\Database\QueryException $ex){ 
          return response()->json(['message'=>$ex->getMessage(), 'status'=>"error"]);
        }
       
    }

    public function delete(Request $request)
    {
        try{

            DB::table('activities')
            ->where('id', $request->input('id'))
            ->update(['excluido' => TRUE]);

            return response()->json(['message'=>"Atividade excluída com sucesso!", 'status'=>"success"]);

        }catch(\Illuminate\Database\QueryException $ex){ 
          return response()->json(['message'=>$ex->getMessage(), 'status'=>"error"]);
        }
    }

    public function done(Request $request)
    {
        try{

            $activity = DB::table('activities')
                            ->where('id',$request->input('id'))
                            ->get();
                      
            DB::table('activities')
            ->where('id', $request->input('id'))
            ->update(['concluido' => !$activity[0]->concluido]);

            return response()->json(['message'=>"Atividade alterada com sucesso!", 'status'=>"success"]);

        }catch(\Illuminate\Database\QueryException $ex){ 
          return response()->json(['message'=>$ex->getMessage(), 'status'=>"error"]);
        }
    }

}
