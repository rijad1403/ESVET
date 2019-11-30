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

Route::get('/usluge', function() {
    return view('services');
});

Route::get('/tim', 'TeamController@index');

Route::get('/galerija', 'GalleryController@index');

Route::get('/onama', function () {
    return view('aboutus');
});

Route::get('/kontakt', 'ContactController@index');

Route::post('/sendMail', 'ContactController@sendMail');
