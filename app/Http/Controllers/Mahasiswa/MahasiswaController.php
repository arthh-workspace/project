<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.dashboard.index');
    }
}
