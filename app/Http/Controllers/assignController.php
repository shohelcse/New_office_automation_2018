<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Teacher;
class assignController extends Controller
{
	/*
    public function testfunction(){
    	$data=DB::table('users')->get();
    	return view('layouts.courseAssign',compact('data'));
    }
    */
public function testfunction(Request $request){
     
 $this->validate($request,[
        'session'=> 'required',
        'semester'=> 'required'
    ]);


  $data = DB::table('users')->where('position','Teacher')->get();
 $result = DB::table('courses')->where('session',$request->input('session'))->where('semester',$request->input('semester'))->get();

return view('layouts.courseAssign',compact('data','result'));
    }




public function testfunction2(Request $request){
     
      $course_id = $request->input('c_id'); 
     $internal_id=$request->input('internal');
     $external_id=$request->input('external');

  $c = count($internal_id);

    for($i=0; $i<$c; $i++)
    {
      

$teachers=new Teacher;

    $teachers->course_id= $course_id[$i];
    $teachers->internal_id=$internal_id[$i];
    $teachers->external_id=$external_id[$i];
    $teachers->save();
  
}  

  return redirect('/home')->with('info','Student saved successfully');

}
}


