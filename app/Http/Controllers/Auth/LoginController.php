<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
                if ($user->role == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->role == 'gugus_kendali') {
                    return redirect()->intended('gugus_kendali');
                } elseif ($user->role == 'dosen_koor') {
                    return redirect()->intended('dosen_koor');
                } elseif ($user->role == 'dosen_pengampu') {
                    return redirect()->intended('dosen_pengampu');
                } elseif ($user->role == 'mahasiswa') {
                    return redirect()->intended('mahasiswa');
                } elseif ($user->role == 'super_dosen1') {
                    return redirect()->intended('dosenp1');
                } elseif ($user->role == 'super_dosen2') {
                    return redirect()->intended('dosenp2');
                } elseif ($user->role == 'super_dosen3') {
                    return redirect()->intended('dosenk3');
                } elseif ($user->role == 'super_dosen4') {
                    return redirect()->intended('dosenp4');
                }
                return redirect()->intended('/');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'login wrong!!');

        return redirect('/');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
