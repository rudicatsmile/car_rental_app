<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');
    
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);


Route::resource('car_data', \App\Http\Controllers\CarDataController::class);
Route::resource('rent', \App\Http\Controllers\RentController::class);
Route::resource('giveback', \App\Http\Controllers\GivebackController::class);



// Route::get('/login', function () {
//     //return view('pages.auth/login');
// });
