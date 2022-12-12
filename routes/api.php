<?php

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sanctum/token/mahasiswa', function (Request $request) {
    $request->validate([
        'username' => 'required',
        'password' => 'required',
        'device_name' => 'required',
    ]);
    $user = Mahasiswa::where('username', $request->username)->first();
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'username' => ['The provided credentials are incorrect.'],
        ]);
    }
    return $user->createToken($request->device_name)->plainTextToken;
});

Route::get('/sanctum/mahasiswa', function (Request $request){
    $mahasiswa = Mahasiswa::all();
    return response()->json([
        'All Mahasiswa' => $mahasiswa
    ]);
});

Route::post('/sanctum/token/dosen', function (Request $request) {
    $request->validate([
        'username' => 'required',
        'password' => 'required',
        'device_name' => 'required',
    ]);
    $dosen = Dosen::where('username', $request->username)->first();
    if (! $dosen || ! Hash::check($request->password, $dosen->password)) {
        throw ValidationException::withMessages([
            'username' => ['The provided credentials are incorrect.'],
        ]);
    }
    return $dosen->createToken($request->device_name)->plainTextToken;
});

Route::get('/sanctum/dosen', function (Request $request){
    $dosen = Dosen::all();
    return response()->json([
        'All dosen' => $dosen
    ]);
});

Route::middleware('auth:sanctum')->get('/user/revoke', function (Request $request) {
    $user = $request->user();
    $user->token()->delete;
    return "tokens are deleted";
});
