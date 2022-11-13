<?php

namespace App\Http\Controllers\Super_dosen3;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperD3Controller extends Controller
{
    public function dosenp()
    {
        return view('menu.super_dosen3.dashboard.dosenp');
    }
    public function dosenk()
    {
        return view('menu.super_dosen3.dashboard.dosenk');
    }
    public function gugusk()
    {
        return view('menu.super_dosen3.dashboard.gugusk');
    }
}
