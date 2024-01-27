<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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

Route::resource('restaurants', RestaurantController::class);

// Route::get('/restaurants', [RestaurantController::class, 'index'])
// ->name('restaurants.index');

// Route::get('/restaurants/create', [RestaurantController::class, 'create'])
//     ->name('restaurants.create');
 
// Route::post('/restaurants', [RestaurantController::class, 'store'])
//     ->name('restaurants.store');
 
// Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show'])
//     ->name('restaurants.show');
 
// Route::get('/restaurants/{restaurant}/edit', [RestaurantController::class, 'edit'])
//     ->name('restaurants.edit');
 
// Route::put('/restaurants/{restaurant}', [RestaurantController::class, 'update'])
//     ->name('restaurants.update');
 
// Route::delete('/restaurants/{restaurant}', [RestaurantController::class, 'destroy'])
//     ->name('restaurants.destroy');
