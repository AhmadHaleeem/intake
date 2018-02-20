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


//Route::post('/storeEval', 'EvaluationController@storeEval');
Route::post('/bedrijf/store', 'EvaluationController@storeEval');
Route::post("/ontwerp/store", 'OntwerpsController@storeOntwerp');
Route::post("/inhoud/store", 'InhoudsController@storeInhoud');
Route::post("/techniek/store", 'TechnieksController@storeTechniek');
Route::post("/hosting/store", 'HostingsController@storeHosting');

//Export PDF File
Route::get('/export/{id?}', 'PdfController@export')->name('export.pdf');
// Admin Routes
Route::get('/user', 'AdminController@index');
Route::get('/content/{id?}', 'AdminController@getContent');
Route::get('/logout', 'AdminController@destroy');

//Route::get('/deny', 'AdminController@deny');
Route::get('/dashboard', 'EvaluationController@index')->middleware('roles');


// Auth Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




