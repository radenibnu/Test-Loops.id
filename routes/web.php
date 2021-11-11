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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'dashboardController@index')->name('dashboard.index');
    
    Route::prefix('post')->group(function () {
        Route::get('/', 'postController@index')->name('post.index');
        Route::get('/kedua', 'postController@kedua')->name('post.kedua');
        Route::get('/ketiga', 'postController@ketiga')->name('post.ketiga');
        Route::get('/create', 'postController@create')->name('post.create');
        Route::post('/', 'postController@store')->name('post.store');
        Route::get('/edit/{id}', 'postController@edit')->name('post.edit');
        Route::put('/{id}', 'postController@update')->name('post.update');
        Route::put('/delete', 'postController@delete')->name('post.delete');
        Route::delete('/{id}', 'postController@destroy')->name('post.destroy');
        Route::get('/show/{id}', 'postController@show')->name('post.show');
    });
});
