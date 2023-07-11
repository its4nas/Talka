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

// Route::get('/', function () {
//     return view('Home.index');
// });


Route::get('dashboard',[App\Http\Controllers\AdminController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('messages',[App\Http\Controllers\AdminController::class,'messages']);

//Route::get('users/create',[App\Http\Controllers\UserController::class,'create']);
// Route::get('users/edit_user/{id}',[App\Http\Controllers\UserController::class,'edit']);

Route::resource('users', App\Http\Controllers\UserController::class)->middleware(['auth', 'verified']);
Route::get('user/trash', [App\Http\Controllers\UserController::class, 'trash'])->middleware(['auth', 'verified'])->name('users.trash');
Route::get('user/restore/{id}',[App\Http\Controllers\UserController::class,'restore'])->middleware(['auth', 'verified'])->name('users.restore');
Route::get('user/forceDelete/{id}',[App\Http\Controllers\UserController::class,'forceDelete'])->middleware(['auth', 'verified'])->name('users.forceDelete');

Route::resource('offers', App\Http\Controllers\OfferController::class)->middleware(['auth', 'verified']);
Route::get('offer/trash', [App\Http\Controllers\OfferController::class,'trash'])->middleware(['auth', 'verified'])->name('offers.trash');


Route::resource('food_types', App\Http\Controllers\FoodTypeController::class);
Route::get('food_type/trash',[App\Http\Controllers\FoodTypeController::class, 'trash'])->middleware(['auth', 'verified'])->name('food_types.trash');
Route::get('food_type/restore/{id}',[App\Http\Controllers\FoodTypeController::class,'restore'])->middleware(['auth', 'verified'])->name('food_types.restore');
Route::get('food_type/forceDelete/{id}',[App\Http\Controllers\FoodTypeController::class,'forceDelete'])->middleware(['auth', 'verified'])->name('food_types.forceDelete');

Route::resource('orders', App\Http\Controllers\OrderController::class)->middleware(['auth', 'verified']);
Route::get('order/trash', [App\Http\Controllers\OrderController::class,'trash'])->middleware(['auth', 'verified'])->name('orders.trash');


Route::get('/', function () {
    return view('Home.index');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('restaurants', App\Http\Controllers\RestaurantController::class)->middleware(['auth', 'verified']);
Route::get('restaurant/trash', [App\Http\Controllers\RestaurantController::class,'trash'])->middleware(['auth', 'verified'])->name('restaurants.trash');
Route::get('restaurant/restore/{id}',[App\Http\Controllers\RestaurantController::class,'restore'])->middleware(['auth', 'verified'])->name('restaurants.restore');
Route::get('restaurant/forceDelete/{id}',[App\Http\Controllers\RestaurantController::class,'forceDelete'])->middleware(['auth', 'verified'])->name('restaurants.forceDelete');


Route::resource('messages',App\Http\Controllers\MessageController::class)->middleware(['auth', 'verified']);

Route::resource('roles', App\Http\Controllers\UserRoleController::class)->middleware(['auth', 'verified']);
