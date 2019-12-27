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
    return view('index');
});

Auth::routes();

Route::post('/print-pdf', 'Admin@printPDF')->name('printpdf');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/step1', 'Admin@step1')->name('step1');
Route::get('/step2', 'Admin@step2view')->name('step2');
Route::get('/download', 'Admin@download')->name('download');