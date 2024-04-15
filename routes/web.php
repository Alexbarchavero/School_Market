<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

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

Auth::routes();

Route::get('/users', [UsersController::class, 'index'])->name('index')->middleware('auth');
Route::get('/users/create',[UsersController::class, 'create'])->name('users.create');
Route::post('/users/create/add',[UsersController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}/update', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');