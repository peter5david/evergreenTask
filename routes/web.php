<?php

use Illuminate\Support\Facades\Route;

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
    return view('customer_create');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('login', function () {
    return view('login');
});

Route::get('insert','App\Http\Controllers\CustomerInsertController@insertform');
Route::post('create','App\Http\Controllers\CustomerInsertController@insert');

Route::get('logininsert','App\Http\Controllers\SignupController@logininsertform');
Route::post('logincreate','App\Http\Controllers\SignupController@logininsert');

Route::get('view-records','App\Http\Controllers\CustomersViewController@index');

Route::post('checkifuser','App\Http\Controllers\LoginController@checklogin');