<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Roaster;


class roasterEntryController extends Controller
{
    public function Rshow(){
    	$roasters=Roaster::all();
    	return view('layouts.Rshow',['roasters'=> $roasters]);
    }


public function add(Request $request){

    
         
	Storage::putFile('public/download', $request->file('uploadfile'));
   


	$roasters=new Roaster;
	$roasters->session=$request->input('session');
	$roasters->semester=$request->input('semester');
	$roasters->file=$request->input('uploadfile');
	$roasters->start=$request->input('start');
	$roasters->end=$request->input('end');
	$roasters->save();
	return redirect('/Rshow')->with('info','Student saved successfully');

	
}


}
