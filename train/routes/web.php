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

Route::resource('train', 'App\Http\Controllers\AdminController');
Route::resource('train', 'App\Http\Controllers\TrainController');
Route::resource('train', 'App\Http\Controllers\TicketController');

//Login and Register Links
Auth::routes();

//If login successful redirect to home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tickets', 'App\Http\Controllers\TrainController');
Route::resource('trains', 'App\Http\Controllers\ScheduleController');


