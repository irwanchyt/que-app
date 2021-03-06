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
Route::get('/board','BoardController@index')->name('board.index');
Route::get('/counter/{id}', 'WelcomeController@show')->name('welcome.show');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','role:Super Admin'])->group(function(){

    Route::get('/dasboard', function(){return view('pages.dashboard');});

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('/','AdminController@add')->name('add');
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

    Route::prefix('profil')->name('profil.')->group(function(){
        Route::get('/','ProfilController@index')->name('index');

    });

    Route::prefix('loket')->name('loket.')->group(function(){

        Route::get('/','LoketController@index')->name('index');
        Route::post('/store','LoketController@store')->name('store');
        Route::get('/{id}/edit','LoketController@edit')->name('edit');
        Route::post('/{id}/update','LoketController@update')->name('update');
        Route::get('/{id}/destroy','LoketController@destroy')->name('destroy');

    });


});

Route::middleware(['auth','role:Admin'])->group(function(){

    Route::prefix('visitor')->name('visitor.')->group(function(){

        Route::get('/','VisitorController@index')->name('index');
        Route::post('/store','VisitorController@store')->name('store');
        Route::get('/{id}/edit','VisitorController@edit')->name('edit');
        Route::post('/{id}/update','VisitorController@update')->name('update');
        Route::get('/{id}/destroy','VisitorController@destroy')->name('destroy');

    });
    Route::prefix('profil')->name('profil.')->group(function(){
        Route::get('/','ProfilController@index')->name('index');

    });
});

Route::get('/tes','TicketController@index')->name('tiket');
