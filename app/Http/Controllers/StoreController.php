<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class StoreController extends Controller
// {
//     public function index(){
// 		return view('store');
// 	}
// }

class StoreController extends Controller
{
	
    public function index(){

	$storeCont=[
		(object)['jour'=>'Sunday','heure'=>' Closed'],
		(object)['jour'=>'Monday','heure'=>' 7:00 AM to 8:00PM'],
		(object)['jour'=>'Tuesday','heure'=>' 7:00 AM to 8:00PM'],
		(object)['jour'=>'Wenesday','heure'=>' 7:00 AM to 8:00PM'],
		(object)['jour'=>'Thursday','heure'=>' 7:00 AM to 8:00PM'],
		(object)['jour'=>'Friday','heure'=>' 7:00 AM to 8:00PM'],
		(object)['jour'=>'Satuday','heure'=>' 9:00 AM to 5:00PM'],

	];
		return view('store',compact('storeCont'));
	}
}