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

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/test', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/home', 'HomeController@total')->name('admin.home')->middleware('is_admin');
Route::resource('garbage', 'garbageController');
Route::get('report', 'reportController@index');
Route::get('/pdf', 'PDFController@pdf');

Route::get('numre/{id}/create', 'numreController@create_numre');
Route::resource('menber', 'menberController');
Route::resource('numre', 'numreController');
// Route::resource('/menber', 'PDFreController');
Route::resource('typere', 'typereController');