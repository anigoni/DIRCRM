<?php

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

Route::get('/admin', function() {

   return view('admin.index');

});

//Route per gestione USERS
Route::get('/admin/users', 'AdminUsersController@index')->name('users');

//Route per gestione AGENCIES
Route::resource('/admin/agencies', 'AdminAgenciesController');

//Route per gestione USERS
Route::resource('/admin/users', 'AdminUsersController');
