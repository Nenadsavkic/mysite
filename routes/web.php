<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');    // Pocetna (biografija)
Route::get('/aboutMe', [HomeController::class, 'aboutMe'])->name('aboutMe'); // Biografija engleski
Route::get('/home', [HomeController::class, 'index'])->name('home');        // Home strana profil korisnika
Route::get('/home-single-ad/{id}', [AdController::class, 'showSingleAd']) // Single ad korisnika
->name('singleAd');
Route::get('/showAllUsers', [UsersController::class, 'showAllUsers'])  // Prikaz svih korisnika (Usera)
->name('showAllUsers');


Route::get('/home-messages', [MessageController::class, 'showMessages']) // Prikaz poruke korisnika
->name('showUserMessages');
Route::get('/cars', [CarsController::class, 'index'])->name('cars');  // Prikaz svih oglasa iz kategorije 'Cars'
Route::get('/computers', [ComputersController::class, 'index'])->name('computers'); // Prikaz svih oglasa 'Computers'
Route::get('/phones', [PhonesController::class, 'index'])->name('phones'); // Prikaz svih oglasa 'Phones'
Route::get('/contact', [ContactController::class, 'contactForm'])             // Kontakt forma
->name('contactForm');
Route::get('/user-deleteImg/{id}', [UsersController::class, 'deleteImg'])  // Dugme za brisanje profilne slike
->name('user.deleteImg');
Route::get('/home-ad-form', [AdController::class, 'showAdForm'])        // Forma za unos oglasa
->name('showAdForm');
Route::get('/home-editAd-form/{id}', [AdController::class, 'editAdForm']) // Form za editovanje oglasa
->name('adEditForm');

Route::get('/ad-single-ad/{id}', [AdController::class, 'index'])         // Prikaz single oglasa iz bilo koje kategorije
->name('ad.singleAd');

Route::get('/home-replay/{id}', [MessageController::class, 'replayMsg'])          // odgovor na poruku
->name('replayMsg');
Route::post('/user-saveImg/{id}', [UsersController::class, 'saveImg'])   // Postavljanje profilne slike
->name('user.saveImg');
Route::get('/allUserAds/{id}', [AdController::class, 'allUserAds'])         // Prikaz svih korisnikovih oglasa
->name('allUserAds');





Route::post('/home-save-ad', [AdController::class, 'saveAd'])         // Postavljanje oglasa
->name('saveAd');

Route::delete('/home-ad-delete/{id}', [AdController::class, 'adDelete'])  // Brisanje oglasa
->name('adDelete');

Route::post('/home-save-editedAd/{id}', [AdController::class, 'saveEditedAd']) // Cuvanje editovanog oglasa
->name('saveEditedAd');

Route::post('/home-user-message/{id}', [MessageController::class, 'userMessage'])  // Poruke korisnika
->name('userMessage');

Route::post('/home-replay-store/{id}', [MessageController::class, 'replayMsgStore'])   // Cuvanje odgovora na poruku
->name('replayMsgStore');

Route::delete('/home-message-delete/{id}', [MessageController::class, 'deleteMsg'])  // brisanje poruke
->name('deleteMsg');
Route::post('/contact', [ContactController::class, 'contactUsForm'])  // kontakt store
->name('contact.store');
Route::delete('/deleteProfile/{id}', [UsersController::class, 'deleteProfile'])  // Brisanje korisnickog profila
->name('deleteProfile');

Route::delete('/delete-users/{id}', [UsersController::class, 'deleteUser'])->name('deleteUser'); // Brisanje korisnika admin opcija
