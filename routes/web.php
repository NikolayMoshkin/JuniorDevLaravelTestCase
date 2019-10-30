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


Route::get('/', 'MainController@index');

Route::get('/proposal', 'ProposalController@index');
Route::post('/proposal', 'ProposalController@store');
Route::delete('/proposal/{proposal}', 'ProposalController@destroy')->middleware('superadmin');

Route::get('/admin', 'AdminController@index')->middleware('admin');
Route::get('/admin/content', 'AdminController@contentShow')->middleware('superadmin');
Route::post('/admin/content/update', 'AdminController@contentUpdate')->middleware('superadmin');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
