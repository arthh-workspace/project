<?php

use App\Models\Dosen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserDController;
use App\Http\Controllers\Admin\UserMController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Mahasiswa\KuisionerController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;
use Illuminate\Support\Facades\Auth;

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
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('home');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin
Route::group(['middleware' => 'auth:admin'], function () {
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
// Dosen
Route::group(['middleware' => 'auth:dosen'], function () {
    ////////// Dashboard /////////
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
    ////////// Kontrol Kuis //////
    Route::get('/dosen/kontrolkuis', [KontrolkuisController::class, 'index'])->name('dosen.kontrol');
});
// Mahasiswa
Route::group(['middleware' => 'auth:mahasiswa'], function () {
    ////////// Dashboard /////////
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    ////////// Edit Profile /////////
    Route::get('/mahasiswa/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::patch('/mahasiswa/editpofile', [MahasiswaController::class, 'store'])->name('mahasiswa.editprofile');
    ////////// Kuisioner /////////
    Route::get('/mahasiswa/kuisioner', [KuisionerController::class, 'index'])->name('kuisioner');
    Route::post('/mahasiswa/kuisioner/store', [KuisionerController::class, 'store'])->name('kuisioner.store');
    Route::get('/mahasiswa/kuisioner/result', [KuisionerController::class, 'result'])->name('kuisioner.result');
});

Route::get('relasi-1', function(){
    $dosen = App\Models\gugus_kendali::where('id','=','1')->first();

    return $dosen->dosen->nama;
});

Route::get('relasi-2', function(){
    $dosenkoor = App\Models\Dosen::where('username','=','dosen1')->first();

    return $dosenkoor->koor->semester;
});

Route::get('relasi-3', function () {
    $dosenmatkul = App\Models\Dosen::where('username', '=', 'dosen1')->first();

    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosenmatkul->matkul as $temp) {
        echo '<li> id dosen : ' . $temp->id_dosen . ' <strong>' . $temp->ruang . '</strong></li>';
    }
});

Route::get('join_table', [LoginController::class, 'log']);
