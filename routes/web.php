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


Route::get('/payments', 'App\Http\Controllers\PaymentController@tampilkandata')->name('tampilkandata');

Route::get('/tambahdata', 'App\Http\Controllers\PaymentController@tambahdata')->name('tambahdata');
Route::post('/tambahdata_post', 'App\Http\Controllers\PaymentController@add')->name('tambahdata-post');
Route::post('/payments_delete','App\Http\Controllers\PaymentController@deletedata')->name('deletedata');
Route::get('/notification','App\Http\Controllers\PaymentController@notif')->name('notif');



