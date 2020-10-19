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

Route::get('/change-language/{lang}', 'HomeController@changeLanguage')->name('change-language');

Route::middleware('locale')->group(function () {
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/profile', 'ProfileController@index')->name('profile.index');
    Route::post('/user-profile', 'ProfileController@updateUser')->name('user.profile.store');
    Route::post('/publisher-profile', 'ProfileController@updatePublisher')->name('publisher.profile.store');
    Route::post('/change-password', 'ProfileController@changePassword')->name('profile.password');

    Route::get('/games', 'GameController@index')->name('games.index');
    Route::get('/game-detail', 'GameController@gameDetail')->name('games.detail');
    Route::get('/download', 'GameController@download')->name('games.download');
    Route::get('/owned-games', 'GameController@owned')->name('games.owned');
    Route::get('/search-owned-games', 'GameController@searchOwnedGames')->name('games.searchOwned');
    Route::get('/games-by-genre', 'GenreController@index')->name('genres.index');

    Route::get('/add-to-cart', 'CartController@add')->name('cart.store');
    Route::get('/view-cart', 'CartController@index')->name('cart.index');
    Route::delete('/delete-cart-item', 'CartController@destroy')->name('cart.destroy');

    Route::get('/checkout', 'PaymentController@index')->name('checkout.index');
    Route::post('/checkout', 'PaymentController@store')->name('checkout.store');
    Route::get('/checkout-finish', 'PaymentController@finish')->name('checkout.finish');
    Route::get('/payment-history', 'PaymentController@history')->name('checkout.history');
    Route::get('/payment-detail', 'PaymentController@detail')->name('checkout.detail');

    Route::get('/become-publisher', 'UserController@becomePublisher')->name('become.publisher');
    Route::get('/publish-game', 'PublisherController@index')->name('publisher.index');
    Route::post('/publish-game', 'PublisherController@publish')->name('publisher.publish');
    Route::get('/publisher-request', 'MailController@publisherRequest')->name('publisher.request');

    Route::resource('/blogs', 'BlogController');
    Route::post('/post-comment', 'CommentController@create')->name('post.comment');
    Route::delete('/delete-comment/{id}', 'CommentController@destroy')->name('delete.comment');
    Route::post('/update-comment', 'CommentController@update')->name('update.comment');
});
