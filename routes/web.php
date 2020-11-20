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

// CRUD BY RESOURCE
Route::resource('artikell', 'ProController');


//CRUD BY DATABASE
// Route::get('/artikell', 'ProController@index');
// Route::get('/artikell/create', 'ProController@create');
// Route::get('/artikell/{slug}', 'ProController@show');
// Route::post('/artikell', 'ProController@store');
// Route::get('/artikell/{id}/edit', 'ProController@edit');
// Route::put('/artikell/{id}', 'ProController@update');
// Route::delete('/artikell/{id}', 'ProController@destroy');