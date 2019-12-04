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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');
Route::get('/gallery', 'PagesController@gallery');

Route::get('/menu', 'PagesController@menu');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/blog', 'PagesController@blog');


Route::get('/admin/login', 'PagesController@login');

Route::get('/admin', 'PagesController@dashboard');

Route::get('/dash', 'AdminController@dashboard')->name('dash');


Route::get('/admin/foodItems', 'PagesController@foodItems');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
