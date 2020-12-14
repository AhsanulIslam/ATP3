<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{

	 
       public function index(){
       	//as array
       	// $user = ['name'=> 'imon', 'id' =>12];
       	// return view('home.index', $user);  //data
       	
       	//as variable
       	// $name = "imon";
       	// $id = 1234;
       	// return view('home.index', compact('name','id'));  


       	// or
       	// return view('home.index')
      		//  	->with('name','imon')
      		//  	->with('id','23');
		// or
       	// return view('home.index')
      		//  	->withName('imon')
      		//  	->withId('236');

       		// or

      	// $v = view('home.index'); 		
      	// $v->withName('imon'); 		
      	// $v->withId('123123'); 		
      	// return $v;
       	
       	return view('home.index');

       }

       public function stdlist(){
       	$student = $this->getStudentlist();
       		return view('home.stdlist')->with('student',$student);
       }

        public function create(){
       	$student = $this->getStudentlist();
       		return view('home.create')->with('student',$student);
       }



       public function userid($id){
       	echo $id;
       }

       private function getStudentlist(){
	   	return 
	   	[
	   		['id' => 1, 'name'=> 'imon', 'cgpa'=> 3.9, 'email'=>'imon@gmail,com'],
	   		['id' => 2, 'name'=> 'zxa', 'cgpa'=> 3.3, 'email'=>'xds@gmail,com'],
	   		['id' => 3, 'name'=> 'haf', 'cgpa'=> 1.9, 'email'=>'vsd@gmail,com'],
	   		['id' => 4, 'name'=> 'hy', 'cgpa'=> 3.5, 'email'=>'dsf@gmail,com'],
	   		['id' => 5, 'name'=> 'afif', 'cgpa'=> 2.9, 'email'=>'wqe@gmail,com']
	   	];
       }
}
