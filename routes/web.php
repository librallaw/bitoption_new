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

Auth::routes();

Route::get('/home', 'UserController@showDashboard')->name('home');
Route::get('/dashboard', 'UserController@showDashboard')->name('showDashboard');
Route::get('/plans', 'UserController@showPlans')->name('showPlans');
Route::get('/account/deposit', 'UserController@showDeposit')->name('showDeposit');
Route::get('/account/withdraw', 'UserController@showWithdraw')->name('showWithdraw');
Route::get('/account/profile', 'UserController@showProfile')->name('showProfile');
Route::get('/account/resetpwd', 'UserController@resetpwd')->name('resetpwd');
Route::get('/account/history', 'UserController@showHistory')->name('showHistory');
