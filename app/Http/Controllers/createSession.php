<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
class createSession extends Controller
{
   public function add(Request $request){
	$this->validate($request,[
		'session'=> 'required'
	]);

	$sessions=new Session;
	$sessions->session=$request->input('session');

	$sessions->save();
	return redirect('/home')->with('info','Student saved successfully');
}
}
