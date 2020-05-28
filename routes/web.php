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

//Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');
});


Route::get('login', 'HomeController@login')->name('login');
Route::post('submit/login', 'HomeController@submitLogin')->name('submit_login');
Route::get('logout', 'HomeController@logout')->name('logout');
Route::resource('/etudiant', 'EtudiantController');
