<?php

namespace App\Http\Controllers\Dosen_koor;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenKController extends Controller
{
    public function index()
    {
        return view('menu.dosen_koor.dashboard.index');
    }
}
