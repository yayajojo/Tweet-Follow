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
})->name('auth');

Auth::routes();
// tweets routes
Route::get('/tweets', 'TweetController@index')->name('home');
Route::post('/tweets', 'TweetController@store');

// profiles routes
// {user:name} override getRouteKeyName()
Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profiles.show');
Route::patch('/profiles/{profile}', 'ProfileController@update')->name('profiles.update');
Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->name('profiles.edit');

// follows
Route::post('/follows/{user:username}', 'FollowController@store')->name('follows.store');

// explore
Route::get('/explore','ExploreController@index')->name('explore');

// likes

Route::post('/{tweet}/like','TweetController@like')->name('tweets.like');
Route::post('/{tweet}/dislike','TweetController@dislike')->name('tweets.dislike');