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
    return view('homes');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogpost', function () {
    return view('blogpost');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/element', function () {
    return view('element');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
