<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the R  outeServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'TrailersController@galeria');

Route::resource('trailers', 'TrailersController')->middleware('auth');

Auth::routes(['reset'=>false]);

Route::get('/home', 'TrailersController@index')->name('home');
