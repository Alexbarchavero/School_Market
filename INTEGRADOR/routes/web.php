<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'ControlIndex@home');
Route::get('/nosotros', 'ControlIndex@aboutus');
Route::get('/contacto', 'ControlIndex@contact');
Route::get('/mvv', 'ControlIndex@mvv');
Route::get('/admin/users','UsersController@index')->name('admin.users.index');
Route::get('/admin/users/create','UsersController@create')->name('admin.users.create');
Route::post('/admin/users/create','UsersController@save')->name('admin.users.save');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
