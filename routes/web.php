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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'backend', 'middleware' => ['auth','role:admin']], function () {
Route::resource('user', 'UserController');
route::resource('motor','MotorController');
route::resource('pembeli','PembeliController');
route::resource('bayarcicilan','BayarCicilanController');
route::resource('belicase','BeliCaseController');
route::resource('belikridit','BeliKriditController');
route::resource('kriditpaket','KriditPaketController');
});

