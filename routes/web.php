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

Route::get('/contact', function () {
    return view('mail');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('send', 'mailagain@send');
Route::get('email', 'mailagain@email');
Route::post('contact/send', 'PageController@contactSend');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/contact', 'HomeController@contact')->name('contact-2TMp');

