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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'],function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('user','UserController');
    Route::resource('mess_member','MessMemberController');
    Route::resource('meal','MealController');
    Route::resource('mess_expense','MessExpenseController');
    Route::resource('deposit','DepositController');
});

