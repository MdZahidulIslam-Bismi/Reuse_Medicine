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

// Route::get('/', function () {
//     return view('HomePage');
// });

// Route::get('/', function () {
//     return view('pages.index');
// });

// Route::get('/', '\App\Http\Controllers\ProjectController@Home');

Route::get('/', '\App\Http\Controllers\ProjectController@Index');
Route::get('/admin/dashboard', '\App\Http\Controllers\ProjectController@Deshboard');
Route::resource('medicine', \App\Http\Controllers\MedicineController::class);
Route::get('/donate', '\App\Http\Controllers\ProjectController@Donate');  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
