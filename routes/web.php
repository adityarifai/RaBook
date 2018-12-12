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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('adminRole')->group(function () {
	Route::prefix('admin')->group(function () {
    	Route::get('home', 'AdminController@index')->name('admin.index2');
		Route::resource('admin', 'AdminController');
    	Route::get('libraries/addbook', 'LibrariesController@create')->name('libraries.addbook');
    	Route::resource('libraries', 'LibrariesController');
		Route::get('books/addpage', 'BooksController@create')->name('books.addpage');
		Route::resource('books', 'BooksController');
	});
});
Route::middleware('userRole')->group(function () {
	Route::get('member/perpustakaan/{id}', 'MemberController@page')->name('member.page');
	Route::get('member/perpustakaan', 'MemberController@perpus')->name('member.perpus');
	Route::resource('member', 'MemberController');
});