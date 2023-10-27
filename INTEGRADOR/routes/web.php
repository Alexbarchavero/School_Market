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

Route::get('/', 'HomeController@home');
Route::get('/nosotros', 'HomeController@aboutus');
Route::get('/contacto', 'HomeController@contact');
Route::get('/mvv', 'HomeController@mvv');
Route::get('/practica', 'HomeController@practica');