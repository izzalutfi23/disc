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
Route::get('/', 'home@index');
Route::post('/test', 'home@store');
Route::post('/test/postest', 'home@postest');
