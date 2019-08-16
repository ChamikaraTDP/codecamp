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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Auth::routes();

Route::get('/p/create', 'PostController@create')->name('p.create');

Route::get('/p/{post}', 'PostController@show')->name('p.show');

Route::post('/p', 'PostController@store')->name('p.store');

Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');

Route::get('/profile/{user}', 'ProfileController@update')->name('profile.update');

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
