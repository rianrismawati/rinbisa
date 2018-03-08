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

Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin', 'adminController@dashboard');	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//edit profile
Route::get('edit_prof/{id}', 'userController@viewEdit')->name('userCtrl.viewEdit');
Route::put('edit_prof/{id}', 'userController@editprof')->name('userCtrl.editprof');

//campaign
Route::get('/campaign', 'userController@viewdash')->name('userCtrl.viewdash');
Route::get('/campaign/addCampaign', 'userController@viewAdd')->name('userCtrl.viewAdd');

//donasi
Route::get('/donasi', 'userController@viewdon')->name('userCtrl.viewdon');


