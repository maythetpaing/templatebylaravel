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

Route::get('/','PageController@homefun')->name('home');
// route is use to  show page
// Route::get('about',function(){
// 	return view('about');
// })->name('aboutname');
Route::get('about','PageController@aboutfun')->name('about');
Route::get('contact','PageController@contactfun')->name('contact');
Route::get('post','PageController@postfun')->name('post');

