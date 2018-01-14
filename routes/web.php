<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



///auth module

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


///session module

Route::get('/sessionCreate',function(){
	return view('layouts.sessionCreate');
});

Route::post('/insertToSession','createSession@add');
Route::get('/sessionCreate','sessionController@myfunction5');

///semester module

Route::get('/semesterCreate',function(){
	return view('layouts.semesterCreate');
});



///semester details module


Route::get('/semesterDetails',function(){
	return view('layouts.semesterDetails');
});





///Roaster module
Route::get('/Radding',function(){
	return view('layouts.Radding');
});
Route::get('/Rshow','roasterEntryController@Rshow');
Route::post('/insertToRadding','roasterEntryController@add');



///courseEntry module
Route::get('/courseEntry',function(){
	return view('layouts.courseEntry');
});

Route::get('/courseEntry','sessionController@myfunction');
Route::post('/insertToEntry','CourseEntryController@add');


///courseAssign module

Route::get('/courseAssignSession',function(){
	return view('layouts.courseAssignSession');
});

Route::get('/courseAssignSession','sessionController@myfunction3');
Route::post('/insertToCourseAssign','assignController@testfunction');
Route::post('/insertToAssignTeacher','assignController@testfunction2');



///tracking module

Route::get('/courseTrackingSession','sessionController@myfunction4');
Route::post('/insertCourseTracking','trackingController@testfunction');
Route::post('/insertTotrackingTeacher','trackingController2@check');





Route::get('/casualLeave', function () {
    return view('layouts.casualLeave');
});