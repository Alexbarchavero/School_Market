<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', 'ControlIndex@home');
Route::get('/nosotros', 'ControlIndex@aboutus');
Route::get('/contacto', 'ControlIndex@contact');
Route::get('/mvv', 'ControlIndex@mvv');
Route::get('/admin/users/create','UsersController@create')->name('admin.users.create');
Route::post('/admin/users/save','UsersController@save')->name('admin.users.save');
Route::put('/admin/users/edit','UsersController@edit')->name('admin.users.edit');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');
