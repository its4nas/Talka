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
    return view('welcome');
});

Route::get('home','HomeController@index');

Route::get('dashbaord','AdminController@index');
Route::get('messages','AdminController@messages');

Route::resource('users', UserController::class);
// Route::get('add_user','UserController@index');
// Route::get('edit_user','ProductController@edit');

Route::resource('offers', OfferController::class);

Route::resource('orders', OrderController::class);
