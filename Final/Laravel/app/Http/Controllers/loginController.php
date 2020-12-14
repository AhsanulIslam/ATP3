<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){
    	// echo $_POST['username'];
    	// echo $_POST['password'];
    	// $req ->username;
    	// $req ->password;
    	if ($req->username == "imon" && $req->password == 123){
    	return redirect('/home');
    	}
    	else{
    		return redirect('/login');
    	}
    }
}
