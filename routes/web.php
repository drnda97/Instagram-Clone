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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/profile/{user}', 'ProfilesController@profile')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::get('/post/create', 'PostsController@create')->name('post.create');

Route::post('/post/store', 'PostsController@store')->name('post.store');

Route::get('/post/{post}', 'PostsController@show')->name('post.show');
