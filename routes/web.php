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
Route::get('/aboutMe', [App\Http\Controllers\HomeController::class, 'aboutMe'])->name('aboutMe');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home-single-ad/{id}', [App\Http\Controllers\HomeController::class, 'showSingleAd'])
->name('home.singleAd');




Route::get('/home-messages', [App\Http\Controllers\HomeController::class, 'showMessages'])
->name('home.showMessages');
Route::get('/cars', [App\Http\Controllers\CarsController::class, 'index'])->name('cars');
Route::get('/computers', [App\Http\Controllers\ComputersController::class, 'index'])->name('computers');
Route::get('/phones', [App\Http\Controllers\PhonesController::class, 'index'])->name('phones');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contactForm'])
->name('contactForm');
Route::get('/user-deleteImg/{id}', [App\Http\Controllers\UsersController::class, 'deleteImg'])
->name('user.deleteImg');
Route::get('/home-ad-form', [App\Http\Controllers\HomeController::class, 'showAdForm'])
->name('home.showAdForm');
Route::get('/home-editAd-form/{id}', [App\Http\Controllers\HomeController::class, 'editAdForm'])
->name('home.adEditForm');
Route::get('/home-delete-user', [App\Http\Controllers\HomeController::class, 'deleteUser'])
->name('home.deleteUser');

Route::get('/ad-single-ad/{id}', [App\Http\Controllers\AdController::class, 'index'])
->name('ad.singleAd');

Route::get('/home-messages', [App\Http\Controllers\HomeController::class, 'showMessages'])
->name('home.showUserMessages');

Route::get('/home-replay', [App\Http\Controllers\HomeController::class, 'replayMsg'])
->name('home.replayMsg');




Route::post('/user-saveImg/{id}', [App\Http\Controllers\UsersController::class, 'saveImg'])
->name('user.saveImg');

Route::post('/home-save-ad', [App\Http\Controllers\HomeController::class, 'saveAd'])
->name('home.saveAd');

Route::delete('/home-ad-delete/{id}', [App\Http\Controllers\HomeController::class, 'adDelete'])
->name('home.adDelete');

Route::post('/home-save-editedAd/{id}', [App\Http\Controllers\HomeController::class, 'saveEditedAd'])
->name('home.saveEditedAd');

Route::post('/home-user-message/{id}', [App\Http\Controllers\HomeController::class, 'userMessage'])
->name('home.userMessage');

Route::post('/home-replay-store', [App\Http\Controllers\HomeController::class, 'replayMsgStore'])
->name('home.replayMsgStore');

Route::delete('/home-message-delete/{id}', [App\Http\Controllers\HomeController::class, 'deleteMsg'])
->name('home.deleteMsg');

Route::post('/home-contact', [App\Http\Controllers\HomeController::class, 'emailContact'])
->name('home.contact');

