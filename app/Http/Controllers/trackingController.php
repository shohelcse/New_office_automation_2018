<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class trackingController extends Controller
{
    
public function testfunction(Request $request){
     
 $this->validate($request,[
        'session'=> 'required',
        'semester'=> 'required'
    ]);
 
 
 /*$result_internal = DB::table('courses')
->join('teachers','courses.id','=','teachers.course_id')
->outerjoin('users as u2','u2.id','=','teachers.external_id')
->where('session',$request->input('session'))->where('semester',$request->input('semester'))
*/
 $result = DB::table('courses')
->select('courses.courseCode', 'courses.courseTitle', 'u1.name as int_name', 'u2.name as ext_name')
->join('teachers','courses.id','=','teachers.course_id')
->join('users as u2','u2.id','=','teachers.external_id', 'left outer')
->leftjoin('users as u1','u1.id','=','teachers.internal_id')
->where('session',$request->input('session'))->where('semester',$request->input('semester'))
->get();
//->where('users.id','internal_id')->where('users.id','external_id')
//
//->get();
// var_dump($result);

return view('layouts.courseTracking',compact('result'));
    }


}
