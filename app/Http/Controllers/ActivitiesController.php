<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
    	$activities = ['teste'];

    	return view('todo.list',compact('activities'));
    }

    public function add(Request $request)
    {
    	

    	$this->validate($request,[
    		'name' => ['required']
    	]);

        // echo "<pre>";
        // var_dump($request->input('nome'));
        die;

        return View::make('todo.add')

    }

    public function edit(Request $request)
    {
    	echo "<pre>";
        var_dump($request->input('id'));
        die;
    }

    public function delete(Request $request)
    {
    	echo "<pre>";
        var_dump($request->input('id'));
        die;
    }

    public function done(Request $request)
    {
    	echo "<pre>";
        var_dump($request->input('id'));
        die;
    }

}
