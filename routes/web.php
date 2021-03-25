<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProposerTrajetController;
use App\Http\Controllers\PrendreTrajetController;
use App\Http\Controllers\ListetrajetController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\PassagerController;
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
///////Connexion///////////////
// Auth::route();
Route::get('Connexion', 'LoginController@index')->name('Connexion');
Route::get('Inscrisption', 'RegisterController@index')->name('Inscrisption');
///////Home///////////////
Route::get('/', function () {
    return view('welcome');
});
Route::get('Accueil', 'AccueilController@index')->name('Accueil');
////Les vues////////////
Route::get('PrendreTrajet', 'PrendreTrajetController@index')->name('PrendreTrajet');
Route::get('Evenements', 'EvenementController@index')->name('Evenements');
Route::resource('ProposerTrajet','ProposerTrajetController');
Route::resource('ListeTrajet', 'ListetrajetController');
Route::resource('Administrateur','AdminController');
Route::resource('Conducteur','ConducteurController');
Route::resource('Passagers','PassagerController');