<?php

namespace App\Http\Controllers\dosen;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function index()
    {
        
        return view('dosen.dashboard.index');

    }
}
