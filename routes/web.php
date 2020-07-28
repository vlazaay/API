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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@index');
Route::get('/contact', 'PostController@contact');


Route::group(['middleware'=>['is_admin']], function (){
    Route::get('/admin', 'AdminController@index');
    Route::resource('/admin', 'AdminController');
    Route::get('/admin/{admin}/delete', 'AdminController@destroy');
});

