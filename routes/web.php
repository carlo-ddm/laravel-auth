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



// 'welcome' è 'Pagina pubblica'. Rinominata 'home'
// 'home' è pagina 'admin'. Rinominata in questo modo

Route::get('/', function () {
    return view('guest.welcome');
})->name('home');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
