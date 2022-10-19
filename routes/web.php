<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;

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

//Login
Route::get('/', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/logout', [LoginController::class, 'create'])->name('logout');

// Dashboard
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

// Admin
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/search', [UserController::class, 'search'])->name('user.search');
Route::get('/user/create', [UserController::class, 'create'])->name('user.add');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// dosen

// Mahasiswa
