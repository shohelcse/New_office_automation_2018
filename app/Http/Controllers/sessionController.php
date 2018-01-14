<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class sessionController extends Controller
{
    public function myfunction(){
$data = DB::table('sessions')->get();
return view('layouts.courseEntry',compact('data'));
  }



     public function myfunction2(){

$data = DB::table('sessions')->get();
return view('layouts.courseTracking3',compact('data'));
  }

  

     public function myfunction3(){
$data = DB::table('sessions')->get();
return view('layouts.courseAssignSession',compact('data'));
    }




     public function myfunction4(){
$data = DB::table('sessions')->get();
return view('layouts.courseTrackingSession',compact('data'));
   }

     public function myfunction5(){
$data = DB::table('sessions')->get();
return view('layouts.sessionCreate',compact('data'));
   }



     public function myfunction6(){
$data = DB::table('sessions')->get();
return view('layouts.sessionCreate',compact('data'));
   }



}
