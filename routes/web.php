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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/materi', 'AdminController@materi')->name('materi');

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/user', function () {
    return view('admin.user');
});

Route::get('/user', 'PenggunaController@index')->name('user');

//
Route::get('/materi', 'HomePenggunaController@indexMateri')->name('materi');
Route::get('/bacamateri', 'HomePenggunaController@bacaMateri');
Route::get('/download', 'HomePenggunaController@downloadMateri')->name('download');

Route::get('/halamanawal', 'HalamanAwalController@halamanawal');

Route::get('/ujian', 'UjianController@ujian')->name('ujian');

// 

// Route::get('/user', function(){
// 	return view('user');
// })->name('user');

