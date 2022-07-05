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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



// 'welcome' is public homepage. It's renamed 'home'
// 'home' is admin page. It's renamed in this way

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
