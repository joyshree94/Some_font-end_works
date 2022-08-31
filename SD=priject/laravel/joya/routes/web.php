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

Route::get('/','homecontroller@main');
Route::post('insert','HomeController@insert');
Route::post('login','homecontroller@login');
Route::post('reqstcustomer/{idd}','homecontroller@reqstcustomer');
Route::get('/all','homecontroller@all');
Route::get('accept/{id}','homecontroller@accept');