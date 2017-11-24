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

// User Routes
Route::get('/bedrijf', 'HomeContrlller@jebedrijf');
Route::get('/ontwerp', 'HomeContrlller@ontwerp');
Route::get('/inhoud', 'HomeContrlller@inhoud');
Route::get('/techniek', 'HomeContrlller@techniek');
Route::get('/hosting', 'HomeContrlller@hosting');
Route::get('/register', 'HomeContrlller@register');
Route::post('/store', 'HomeContrlller@store');
Route::get('/klaar', 'HomeContrlller@klaar');


Route::post('/storeEval', 'EvaluationController@storeEval');
Route::post('jeBedrijf/store', 'EvaluationController@storeEval');
Route::post("Ontwerp/store", 'OntwerpsController@storeOntwerp');
Route::post("Inhoud/store", 'InhoudsController@storeInhoud');
Route::post("techniek/store", 'technieksController@storeTechniek');
Route::post("hosting/store", 'HostingsController@storeHosting');

// Admin Routes
Route::get('/user', 'AdminController@index');

Route::get('/bedrijf_evalu', 'AdminController@evalu');
Route::get('/ontwer', 'AdminController@ontwer');
Route::get('/inhouds', 'AdminController@inhoud');
Route::get('/technieks', 'AdminController@techniek');
Route::get('/host', 'AdminController@hosting');
Route::get('/logout', 'AdminController@destroy');

//Route::get('/deny', 'AdminController@deny');
Route::get('/dashboard', 'EvaluationController@index')->middleware('roles');


// Auth Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
