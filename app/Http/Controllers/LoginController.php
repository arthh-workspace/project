<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function admin()
    {
        $admin = Admin::all();
        return view('admin',compact('admin'));
    }
    public function dosen()
    {
        return view('dosen');
    }
    public function mahasiswa()
    {
        return view('mahasiswa');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)){
            return redirect('/admin');
        } elseif (Auth::guard('dosen')->attempt($credentials)){
            return redirect('/dosen');
        } elseif (Auth::guard('mahasiswa')->attempt($credentials)){
            return redirect('/mahasiswa');
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