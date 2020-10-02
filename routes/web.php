<?php

/**
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Mail\NewUserWelcomeMail;

Auth::routes();

Route::get('/email', function () {
    return new NewUserWelcomeMail();
    }
);

Route::post('/follow/{user}', 'FollowController@store');

Route::get('/', 'PostController@index');
Route::get('/p/create', 'PostController@create')->name('p.create');
Route::post('/p', 'PostController@store')->name('p.store');
Route::get('/p/{post}', 'PostController@show')->name('p.show');
Route::get('/p/{post}/delete', 'PostController@delete')->name('p.delete');

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
