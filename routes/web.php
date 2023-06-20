<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home.index');
});


Route::get('dashboard',[App\Http\Controllers\AdminController::class,'index']);
// Route::get('messages',[App\Http\Controllers\AdminController::class,'messages']);

//Route::get('users/create',[App\Http\Controllers\UserController::class,'create']);
// Route::get('users/edit_user/{id}',[App\Http\Controllers\UserController::class,'edit']);

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('offers', App\Http\Controllers\OfferController::class);


Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::get('/', function () {
    return view('Home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('restaurants', App\Http\Controllers\RestaurantController::class);

Route::resource('messages',App\Http\Controllers\MessageController::class);
