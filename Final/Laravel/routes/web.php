<?php

use Illuminate\Support\Facades\Route;

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
//get static function  , in the get perameter we can put string or array or function
Route::get('/', function () {   
    return view('welcome');
});

Route::get('/test', function(){
	echo "Hello Laravel....";
});

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');

Route::get('/home', 'homeController@index');
Route::get('/logout', 'logoutController@index');


Route::get('/stdlist', 'homeController@stdlist');
Route::get('/create', 'homeController@create');


Route::get('/user/{id}',  'homeController@userid');