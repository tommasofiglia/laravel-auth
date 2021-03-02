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

// ****************************************
// PARTE VISIBILE A TUTTI
// ****************************************

Route::get('/', 'PageController@index')->name('homepage');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contacts', 'PageController@contacts')->name('contacts');

Route::get('/blog', 'PostController@index')->name('index');


// ****************************************
// PARTE VISIBILE SOLO ALL'ADMIN
// ****************************************


Auth::routes(['register' => false]);

  Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('posts', 'PostController');

  });
