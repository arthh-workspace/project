<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class AdminController extends Controller
{
    public function index()
    {
        $dosen = Dosen::count();
        $mahasiswa  = Mahasiswa::count();
        return view('admin.dashboard.index',compact('dosen','mahasiswa'));
    }
}
