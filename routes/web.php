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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//My Routes

//For User List
Route::get('/userList', function () {
    return view('layouts.userList');
})->middleware('auth');


// for transaction 
Route::get('transactions', function () {
    return view('layouts.transactions');
})->middleware('auth');

//for Upload csv
Route::get('uploadCSV', function () {
    return view('layouts.uploadCSV');
})->middleware('auth');

