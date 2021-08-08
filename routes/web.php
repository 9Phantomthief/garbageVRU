<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Models\Alldata;

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

Auth::routes();

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('admin/create', [ListController::class, 'create'])->name('create')->middleware('is_admin');


//Route::get('/createList', function () {
//      return view('createList');
//      });

//Route::middleware(['auth', 'is_admin:1'])->group(function () {
//   //Route::get('createList', [ListController::class,'create'])->name('create');
//   });


