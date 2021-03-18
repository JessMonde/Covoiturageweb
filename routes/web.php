<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\LoginController;

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
Route::get('Connexion', 'LoginController@index')->name('Connexion');
///////Home///////////////
Route::get('/', function () {
    return view('welcome');
});
Route::get('Accueil', 'AccueilController@index')->name('Accueil');
////Les vues////////////