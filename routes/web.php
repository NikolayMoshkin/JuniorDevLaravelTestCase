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

Route::get('/proposalA', 'ProposalController@index1');
Route::get('/proposalB', 'ProposalController@index2');
Route::post('/proposal', 'ProposalController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
