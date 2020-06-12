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
    return view('home4');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
Auth::routes();

Route::group(['middleware'=>'auth'], function (){


    Route::group(['middleware'=>'IsAdminVal'], function () {

        Route::get('/home', 'UserController@showDashboard')->name('home');
        Route::get('/dashboard', 'UserController@showDashboard')->name('showDashboard');

    });

    Route::get('/transactions', 'UserController@showTransactions')->name('showTransactions');

    Route::get('/account/withdraw', 'UserController@showWithdraw')->name('showWithdraw');
    Route::get('/account/withdrawals', 'UserController@showWithdrawals')->name('showWithdrawals');

    Route::get('/account/deposits', 'UserController@showDeposits')->name('showDeposits');
    Route::get('/account/deposit', 'UserController@showDeposit')->name('showDeposit');

    Route::get('/account/profile', 'UserController@showProfile')->name('showProfile');
    Route::get('/account/resetpwd', 'UserController@resetpwd')->name('resetpwd');
    Route::get('/account/history', 'UserController@showHistory')->name('showHistory');

    Route::post('/transaction/deposit', 'TransactionController@deposit')->name('deposit');
    Route::post('/transaction/withdraw', 'TransactionController@withdraw')->name('withdraw');


    Route::get('/mail/{mail}', 'AdminController@mail')->name('mail');

    Route::get('/mail/', 'AdminController@mail2')->name('mail');
    Route::get('/notify/', 'AdminTransactionController@sendMessage')->name('sendMessage');


    Route::group(['middleware'=>'isAdmin'], function (){

    Route::get('/admin/dashboard', 'AdminController@showAdminDashboard')->name('showAdminDashboard');
    Route::get('/admin/pending/deposit', 'AdminController@pendingDeposit')->name('pendingDeposit');
    Route::get('/admin/pending/withdrawals', 'AdminController@pendingWithdrawal')->name('pendingWithdrawal');
    Route::get('/admin/users', 'AdminController@showUsers')->name('showUsers');
    Route::get('/admin/users', 'AdminController@showUsers')->name('showUsers');

    Route::post('/admin/debit/user', 'AdminTransactionController@debit_user')->name('debit_user');
    Route::post('/admin/credit/user', 'AdminTransactionController@credit_user')->name('credit_user');


    Route::get('/admin/transaction/approve/deposit/{trans_id}', 'AdminTransactionController@approve_deposit_transaction')
        ->name('approve_deposit_transaction');

    Route::get('/admin/transaction/approve/withdraw/{trans_id}', 'AdminTransactionController@approve_withdraw_transaction')
        ->name('approve_withdraw_transaction');
    });


    Route::get('/admin/user/profile/{user_id}', 'AdminUsersController@showEditUser')
        ->name('showEditUser');

    Route::post('/admin/user/profile', 'AdminUsersController@doEditUser')
        ->name('doEditUser');


});



Route::get('/plans', 'UserController@showPlans')->name('showPlans');



Route::any('/logout', 'HomeController@logout')->name('logout');





