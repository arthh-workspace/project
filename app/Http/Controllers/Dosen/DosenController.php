<?php

namespace App\Http\Controllers\Dosen;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen.dashboard.index');
    }
}
