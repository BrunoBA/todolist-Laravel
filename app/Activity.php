<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Activity extends Model
{

	 public static function get($id)
    {

    	$activities = DB::table('activities')
        ->where('id', '=', $id)
        ->orderBy('id','asc')->get();

      	return $activities[0];
    }

    public static function getAll($flag = TRUE)
    {

    	$activities = DB::table('activities')
        ->where('excluido', '=', FALSE)
        ->orderBy('id','asc')->get();

        if($flag)
    		return $activities;
    	return count($activities);
    }

	public static function getCompleted($flag = TRUE){

       	$conclusions = DB::table('activities')
       	->where([['excluido', '=', FALSE],['concluido','=',TRUE]])
        ->orderBy('id','asc')->get();
        
        if($flag)
            return $conclusions;
        return count($conclusions);
        
    }


}
