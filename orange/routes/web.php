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
Route::get('member/info','MemberController@info');
Route::get('/', function () {
    return view('welcome');
});
Route::any('/dym', function () {
    return view('dym');
});


Route::any('index', ['uses' => 'indexController@index']);//首页


/**公共部分**/
Route::any('top', ['uses' => 'commonController@top']);
Route::any('menu', ['uses' => 'commonController@menu']);
Route::any('main', ['uses' => 'commonController@main']);