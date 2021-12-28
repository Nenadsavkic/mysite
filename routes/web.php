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

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');    // Pocetna (biografija)
Route::get('/', [App\Http\Controllers\HomeController::class, 'aboutMe'])->name('aboutMe'); // Biografija engleski
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');        // Home strana profil korisnika
Route::get('/home-single-ad/{id}', [App\Http\Controllers\HomeController::class, 'showSingleAd']) // Single ad korisnika
->name('home.singleAd');
Route::get('/showAllUsers', [App\Http\Controllers\UsersController::class, 'showAllUsers'])  // Prikaz svih korisnika (Usera)
->name('showAllUsers');

Route::get('/search-cars',[App\Http\Controllers\CarsController::class, 'search'])->name('searchCars');  //  search Cars
Route::get('/search-computers',[App\Http\Controllers\ComputersController::class, 'search'])->name('searchComputers');  //  search Computers
Route::get('/search-phones',[App\Http\Controllers\PhonesController::class, 'search'])->name('searchPhones');  //  search Phones



Route::get('/home-messages', [App\Http\Controllers\HomeController::class, 'showMessages']) // Prikaz poruke korisnika
->name('home.showMessages');
Route::get('/cars', [App\Http\Controllers\CarsController::class, 'index'])->name('cars');  // Prikaz svih oglasa iz kategorije 'Cars'
Route::get('/computers', [App\Http\Controllers\ComputersController::class, 'index'])->name('computers'); // Prikaz svih oglasa 'Computers'
Route::get('/phones', [App\Http\Controllers\PhonesController::class, 'index'])->name('phones'); // Prikaz svih oglasa 'Phones'
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contactForm'])             // Kontakt forma
->name('contactForm');
Route::get('/user-deleteImg/{id}', [App\Http\Controllers\UsersController::class, 'deleteImg'])  // Dugme za brisanje profilne slike
->name('user.deleteImg');
Route::get('/home-ad-form', [App\Http\Controllers\HomeController::class, 'showAdForm'])        // Forma za unos oglasa
->name('home.showAdForm');
Route::get('/home-editAd-form/{id}', [App\Http\Controllers\HomeController::class, 'editAdForm']) // Form za editovanje oglasa
->name('home.adEditForm');
Route::get('/home-delete-user', [App\Http\Controllers\HomeController::class, 'deleteUser'])      // Brisanje korisnickog profila
->name('home.deleteUser');

Route::get('/ad-single-ad/{id}', [App\Http\Controllers\AdController::class, 'index'])         // Prikaz single oglasa iz bilo koje kategorije
->name('ad.singleAd');

Route::get('/home-messages', [App\Http\Controllers\HomeController::class, 'showMessages'])    // prikaz poruke
->name('home.showUserMessages');

Route::get('/home-replay', [App\Http\Controllers\HomeController::class, 'replayMsg'])          // odgovor na poruku
->name('home.replayMsg');

Route::get('/allUserAds/{id}', [App\Http\Controllers\AdController::class, 'allUserAds'])         // Prikaz svih korisnikovih oglasa
->name('allUserAds');





Route::post('/user-saveImg/{id}', [App\Http\Controllers\UsersController::class, 'saveImg'])   // Postavljanje profilne slike
->name('user.saveImg');

Route::post('/home-save-ad', [App\Http\Controllers\HomeController::class, 'saveAd'])         // Postavljanje oglasa
->name('home.saveAd');

Route::delete('/home-ad-delete/{id}', [App\Http\Controllers\HomeController::class, 'adDelete'])  // Brisanje oglasa
->name('home.adDelete');

Route::post('/home-save-editedAd/{id}', [App\Http\Controllers\HomeController::class, 'saveEditedAd']) // Cuvanje editovanog oglasa
->name('home.saveEditedAd');

Route::post('/home-user-message/{id}', [App\Http\Controllers\HomeController::class, 'userMessage'])  // Poruke
->name('home.userMessage');

Route::post('/home-replay-store', [App\Http\Controllers\HomeController::class, 'replayMsgStore'])   // Cuvanje odgovora na poruku
->name('home.replayMsgStore');

Route::delete('/home-message-delete/{id}', [App\Http\Controllers\HomeController::class, 'deleteMsg'])  // brisanje poruke
->name('home.deleteMsg');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contactUsForm'])  // kontakt store
->name('contact.store');

Route::delete('/deleteUser/{id}', [App\Http\Controllers\UsersController::class, 'deleteUser'])  // Brisanje korisnika (Usera)
->name('deleteUser');

