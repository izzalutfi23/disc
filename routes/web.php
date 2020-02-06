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


// Registrasi
Route::get('/', 'Home@index');
Route::post('/test', 'Home@store');
Route::post('/test/postest', 'Home@postest');
Route::post('/test/print', 'Home@print');

Route::get('disc/coba', 'Adminsoal@coba');
// Admin
Route::get('/disc/admin', 'Admin@index');
Route::get('/disc/soal', 'Adminsoal@index');
Route::get('/disc/usertest', 'Admin@usertest');
Route::get('/disc/usertest/{Musertest}', 'Admin@lihathasil');

Route::post('/disc/soal', 'Adminsoal@store');
Route::delete('/disc/soal/{Msoal}', 'Adminsoal@destroy');
