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
//admin

Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin', 'adminController@dashboard');	
	Route::get('adm/donasi', 'adminController@donasi')->name('admCtrl.donasi');
	Route::get('adm/detailDon/{id}', 'adminController@viewDet')->name('admCtrl.viewDet');
	Route::put('adm/donasi/{id}', 'adminController@updateD')->name('admCtrl.updateD');
	Route::get('adm/donasi/destroy/{id}', 'adminController@destroy')->name('admCtrl.destroy');
	Route::get('adm/campaign', 'adminController@camp')->name('admCtrl.camp');
	Route::get('adm/{id}/detailC', 'adminController@detCamp')->name('admCtrl.detCamp');
	Route::get('adm/user', 'adminController@user')->name('admCtrl.user');
});


//user
Auth::routes();
//index + proses donasi
Route::get('/index', 'userController@indexC')->name('userCtrl.indexC');
Route::get('/{id}/detailCamp', 'userController@detC')->name('userCtrl.detC');
Route::get('/{id}/prosesDon', 'userController@viewproses1')->name('userCtrl.viewproses1');
Route::post('/{id}/prosesDon', 'userController@proses1')->name('userCtrl.proses1');
Route::put('/{id}/prosesDon2', 'userController@proses2')->name('userCtrl.proses2');

Route::get('/home', 'HomeController@index')->name('home');
//edit profile

Route::get('/{id}/edit_prof', 'userController@viewEdit')->name('userCtrl.viewedit');
Route::put('{id}/edit_prof', 'userController@editprof')->name('userCtrl.editprof');

//campaign
Route::get('/campaign', 'userController@viewdash')->name('userCtrl.viewdash');
Route::get('/addCampaign', 'userController@viewAdd')->name('userCtrl.viewAdd');
Route::post('/addCampaign', 'userController@prosesAdd')->name('userCtrl.prosesAdd');

//donasi
Route::get('/donasi', 'userController@viewdon')->name('userCtrl.viewdon');

//Pelayanan Administrasi Terpadu Kelurahan
Route::get('/pelayanan_ter', 'pelayananController@viewPel');
Route::get('{id}/detailPel', 'pelayananController@detPel')->name('plynCtrl@detPel');


