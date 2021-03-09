<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home-messages', [App\Http\Controllers\HomeController::class, 'showMessages'])
->name('home.showMessages');
Route::get('/cars', [App\Http\Controllers\CarsController::class, 'index'])->name('cars');
Route::get('/computers', [App\Http\Controllers\ComputersController::class, 'index'])->name('computers');
Route::get('/phones', [App\Http\Controllers\PhonesController::class, 'index'])->name('phones');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contactForm'])
->name('contactForm');


Route::post('/user-saveImg/{id}', [App\Http\Controllers\UsersController::class, 'saveImg'])
->name('user.saveImg');


