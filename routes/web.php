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

Route::get('/',['as' => 'public', 'uses' => 'ProductController@showHome']);

Route::get('type',['as' => 'type', 'uses' => 'ProductController@getProductWithIdType']);

Route::get('viewinfo',['as' => 'view-info', 'uses' => 'ProductController@getProductId']);

Route::get('doAddCart',['as' => 'doAddCart', 'uses' => 'ProductController@doAddCart']);
