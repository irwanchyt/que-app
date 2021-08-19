<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/counter/{id}', 'WelcomeController@show')->name('welcome.show');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){

    Route::get('/dasboard', function(){return view('pages.dashboard');});

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('/admin','AdminController@add')->name('add');
        Route::post('/store','AdminController@store')->name('store');
        Route::get('/{id}/edit','AdminController@edit')->name('edit');
        Route::post('/{id}/update','AdminController@update')->name('update');
        Route::get('/{id}/destroy','AdminController@destroy')->name('destroy');
    });

    Route::prefix('category')->name('category.')->group(function(){
        Route::get('/','CategoryController@index')->name('index');
        Route::post('/store','CategoryController@store')->name('store');
        Route::get('/{id}/edit','CategoryController@edit')->name('edit');
        Route::post('/{id}/update','CategoryController@update')->name('update');
        Route::get('/{id}/destroy','CategoryController@destroy')->name('destroy');
    });
});

