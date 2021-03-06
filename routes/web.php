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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Siswa New*/
Route::get('/siswa','SiswaController@index')->name('siswa.index');
Route::get('/siswa/create','SiswaController@create')->name('siswa.create');
Route::post('/siswa/store','SiswaController@store')->name('Siswa.store'); 
Route::get('/siswa/edit/{id}','SiswaController@edit')->name('siswa.edit');
Route::post('/siswa/update/{id}','SiswaController@update')->name('siswa.update');
Route::get('/siswa/destroy/{id}','SiswaController@destroy')->name('siswa.destroy');
Route::get('/siswa/show/{id}','SiswaController@show')->name('siswa.show');


