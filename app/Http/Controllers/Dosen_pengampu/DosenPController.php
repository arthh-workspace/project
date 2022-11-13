<?php

namespace App\Http\Controllers\Dosen_pengampu;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenPController extends Controller
{
    public function index()
    {
        return view('menu.dosen_pengampu.dashboard.index');
    }
}
