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


Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/counter/{id}', 'WelcomeController@show')->name('welcome.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/que','CategoryController@index')->name('category.index');
Route::get('/admin','AdminController@add')->name('admin.add');
Route::post('/admin/store','AdminController@store')->name('admin.store');
Route::get('/admin/{id}/edit','AdminController@edit')->name('admin.edit');
Route::post('/admin/{id}/update','AdminController@update')->name('admin.update');
Route::get('/admin/{id}/destroy','AdminController@destroy')->name('admin.destroy');

Route::get('/category','CategoryController@index')->name('category.index');
Route::post('/category/store','CategoryController@store')->name('category.store');
Route::get('/category/{id}/edit','CategoryController@edit')->name('category.edit');
Route::post('/category/{id}/update','CategoryController@update')->name('category.update');
Route::get('/category/{id}/destroy','CategoryController@destroy')->name('category.destroy');
Route::get('/ticket',function(){

    return view('pages.ticket');
});

Route::get('/dasboard', function(){

    return view('pages.dashboard');
});
