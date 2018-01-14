<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\tracking;
class trackingController2 extends Controller
{
    public function check(Request $request){
     
  


    $IQS = $request->input('IQS');
	$EQS=$request->input('EQS');
	$IQA=$request->input('IQA');
	$EQA=$request->input('EQA');


        $c = count($IQS);

	for($i=0; $i<$c; $i++)
	{
	 $trackings=new tracking;
	$trackings->IQS=$IQS[$i];
    $trackings->EQS=$EQS[$i];
    $trackings->IQA=$IQA[$i];
    $trackings->EQA=$EQA[$i];
    $trackings->save();
	}


 
	return redirect('/home')->with('info','Student saved successfully');



    }

}
