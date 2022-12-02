<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserDController;
use App\Http\Controllers\Admin\UserMController;
use App\Http\Controllers\Dosen_koor\DosenKController;
use App\Http\Controllers\Gugus_kendali\GugusController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;
use App\Http\Controllers\Super_dosen1\SuperD1Controller;
use App\Http\Controllers\Super_dosen2\SuperD2Controller;
use App\Http\Controllers\Super_dosen3\SuperD3Controller;
use App\Http\Controllers\Super_dosen4\SuperD4Controller;
use App\Http\Controllers\Dosen_pengampu\DosenPController;


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
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    ////////// Dashboard /////////
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    ////////// User Dosen /////////
    Route::get('/user_dosen', [UserDController::class, 'index'])->name('user.dosen');
    Route::get('/user_dosen/create', [UserDController::class, 'create'])->name('user.dosen.add');
    Route::post('/user_dosen/store', [UserDController::class, 'store'])->name('user.dosen.store');
    Route::get('/user_dosen/view/{id}', [UserDController::class, 'show'])->name('user.dosen.view');
    Route::get('/user_dosen/edit/{id}', [UserDController::class, 'edit'])->name('user.dosen.edit');
    Route::patch('/user_dosen/update/{id}', [UserDController::class, 'update'])->name('user.dosen.update');
    Route::delete('/user_dosen/destroy/{id}', [UserDController::class, 'destroy'])->name('user.dosen.destroy');
    ///////// User Mahasiswa /////////
    Route::get('/user_mahasiswa', [UserMController::class, 'index'])->name('user.mahasiswa');
    Route::get('/user_mahasiswa/create', [UserMController::class, 'create'])->name('user.mahasiswa.add');
    Route::post('/user_mahasiswa/store', [UserMController::class, 'store'])->name('user.mahasiswa.store');
    Route::get('/user_mahasiswa/edit/{id}', [UserMController::class, 'edit'])->name('user.mahasiswa.edit');
    Route::patch('/user_mahasiswa/update/{id}', [UserMController::class, 'update'])->name('user.mahasiswa.update');
    Route::delete('/user_mahasiswa/destroy/{id}', [UserMController::class, 'destroy'])->name('user.mahasiswa.destroy');
});
// Gugus Kendali
Route::group(['middleware' => ['auth', 'checkRole:gugus_kendali']], function () {
    ////////// Dashboard /////////
    Route::get('/gugus_kendali', [GugusController::class, 'index'])->name('gugus_kendali');
});
// Dosen Koor
Route::group(['middleware' => ['auth', 'checkRole:dosen_koor']], function () {
    ////////// Dashboard /////////
    Route::get('/dosen_koor', [DosenKController::class, 'index'])->name('dosen_koor');
});
// Dosen Pengampu
Route::group(['middleware' => ['auth', 'checkRole:dosen_pengampu']], function () {
    ////////// Dashboard /////////
    Route::get('/dosen_pengampu', [DosenPController::class, 'index'])->name('dosen_pengampu');
});


// Super Dosen 1
Route::group(['middleware' => ['auth', 'checkRole:super_dosen1']], function () {
    ////////// Dashboard /////////
    Route::get('/dosenp1', [SuperD1Controller::class, 'dosenp'])->name('dosenp1');
    Route::get('/dosenk1', [SuperD1Controller::class, 'dosenk'])->name('dosenk1');
});
// Super Dosen 2
Route::group(['middleware' => ['auth', 'checkRole:super_dosen2']], function () {
    ////////// Dashboard /////////
    Route::get('/dosenp2', [SuperD2Controller::class, 'dosenp'])->name('dosenp2');
    Route::get('/gugusk2', [SuperD2Controller::class, 'gugusk'])->name('gugusk2');
});
// Super Dosen 3
Route::group(['middleware' => ['auth', 'checkRole:super_dosen3']], function () {
    ////////// Dashboard /////////
    Route::get('/dosenk3', [SuperD3Controller::class, 'dosenk'])->name('dosenk3');
    Route::get('/gugusk3', [SuperD3Controller::class, 'gugusk'])->name('gugusk3');
});
// Super Dosen 4
Route::group(['middleware' => ['auth', 'checkRole:super_dosen4']], function () {
    ////////// Dashboard /////////
    Route::get('/dosenp4', [SuperD4Controller::class, 'dosenp'])->name('dosenp4');
    Route::get('/dosenk4', [SuperD4Controller::class, 'dosenk'])->name('dosenk4');
    Route::get('/gugusk4', [SuperD4Controller::class, 'gugusk'])->name('gugusk4');
});



// Mahasiswa
Route::group(['middleware' => ['auth', 'checkRole:mahasiswa']], function () {
    ////////// Dashboard /////////
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
});


