<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class courseEntryController extends Controller
{
    
 
public function add(Request $request){

/*	
	$this->validate($request,[
		'session'=> 'required',
		'semester'=> 'required',
		'courseCode'=> 'required',
		'courseTitle'=>'required',
		'TheoryLab'=>'required',
		'credit'=>'required']);
   */

	$courseCode = $request->input('courseCode');
	$courseTitle = $request->input('courseTitle');
	$TheoryLab = $request->input('TheoryLab');
	$credit = $request->input('credit');
	
	$c = count($courseCode);

	for($i=0; $i<$c; $i++)
	{
		$courses=new Course;
		$courses->session=$request->input('session');
		$courses->semester=$request->input('semester');
		$courses->courseCode=$courseCode[$i];
		$courses->courseTitle=$courseTitle[$i];
		$courses->TheoryLab=$TheoryLab[$i];
		$courses->credit=$credit[$i];
		$courses->save();
	}
	return redirect('/home')->with('info','Student saved successfully');

}

}
