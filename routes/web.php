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
Route::get('/about', function () {
    return view('about');
});
Route::get('/people', function () {
    $people = ['Priscilla', 'David', 'Savage', 'Gideon', 'Mimi'];
    return view('people', ['people' => $people]);
});

Route::get('/home', 'PagesController@home');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/cards', 'CardsController@index');
Route::get('/cards/{card}', 'CardsController@show');
