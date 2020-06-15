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

Route::get('/prof/home', 'ProfAccountController@home')->name('prof.account');
Route::post('/prof/absence', 'ProfAccountController@absence')->name('prof.absence');
Route::post('/prof/conge', 'ProfAccountController@conge')->name('prof.conge');
Route::get('/etudiant/home', 'EtudiantAccountController@home')->name('etudiant.account');
Route::get('/etudiant/approuved', 'EtudiantAccountController@approuvedConge')->name('etudiant.approuved');
Route::get('login', 'HomeController@login')->name('login');
Route::post('submit/login', 'HomeController@submitLogin')->name('submit_login');
Route::get('logout', 'HomeController@logout')->name('logout');
Route::get('/absences', 'AbsenceController@index')->name('absence.index');
Route::get('/conge/approuve/{id}', 'AbsenceController@approuve')->name('conge.approuve');
Route::resource('etudiant', 'EtudiantController');
Route::resource('prof', 'ProfController');

