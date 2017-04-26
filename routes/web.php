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

//Route::get('/', function () {
//    return view('welcome');
//});


// Route::get('/',['as' => 'public', 'uses' => 'ProductController@showHome']);

Route::get('login', 'LoginController@getLogin')->name('getLogin');
Route::post('postLogin', ['as'=>'login','uses'=>'LoginController@postLogin']);
 Route::get('home',['as'=>'public','uses'=>'ProductController@showHome']);
