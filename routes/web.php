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



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home/user', 'HomeController@user');

Route::get('/', 'PagesController@index');

Route::resource('stories','StoryController');

Route::resource('home' , 'HomeController');

Route::resource('course' , 'CourseController');


