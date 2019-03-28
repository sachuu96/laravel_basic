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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('signup',['uses'=>'SignupController@signup']);

Route::resource('home','PersonController');
Route::resource('possition','PossitionController');
Route::resource('person','PersonController');

Route::post('person/create',['uses'=>'PersonController@store']);
Route::post('possition/create',['uses'=>'PossitionController@store']);
Route::get('possition',['uses'=>'PossitionController@index'])->name('showPossition');
//Route::get('home',['uses'=>'HomeController@getPossitions']);
Route::get('home',['uses'=>'HomeController@index'])->name('home');
Route::get('person',['uses'=>'PersonController@show'])->name('show');
//Route::post('person',['uses'=>'PersonController@edit']);
Route::post('person/edit',['uses'=>'PersonController@edit']);
Route::post('person/share',['uses'=>'PersonController@share']);
Route::get('viewDownloadFile','DownloadController@downfunc');

//Route::post('users/adminForm',['uses'=>'adminFormController@adminform']);

Route::get('users',['uses'=>'UserController@index']);

Route::get('users/create',['uses'=>'UserController@create']);

Route::post('users',['uses'=>'UserController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
