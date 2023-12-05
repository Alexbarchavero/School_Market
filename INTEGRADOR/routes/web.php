<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', 'ControlIndex@home');
Route::get('/nosotros', 'ControlIndex@aboutus');
Route::get('/contacto', 'ControlIndex@contact');
Route::get('/mvv', 'ControlIndex@mvv');
Route::get('/admin/users','UsersController@index')->name('admin.users.index');
Route::get('/admin/users/create','UsersController@create')->name('admin.users.create');
Route::post('/admin/users/save','UsersController@save')->name('admin.users.save');

Route::put('/admin/users/edite','UsersController@edite')->name('admin.users.edite');
Route::delete('/admin/users/delete','UsersController@delete')->name('admin.users.delete');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
