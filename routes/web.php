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

Route::get('change-language/{lang}', 'HomeController@changeLanguage')->name('change-language');

Route::middleware('locale')->group(function () {
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('profile', 'ProfileController@index')->name('profile.index');
    Route::post('user-profile', 'ProfileController@updateUser')->name('user.profile.store');
    Route::post('publisher-profile', 'ProfileController@updatePublisher')->name('publisher.profile.store');

    Route::get('games', 'GameController@index')->name('games.index');
    Route::get('game-detail', 'GameController@gameDetail')->name('games.detail');

    Route::get('add-to-cart', 'CartController@add')->name('cart.store');
});
