<?php

namespace App\Http\Controllers\Super_dosen4;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperD4Controller extends Controller
{
    public function dosenp()
    {
        return view('menu.super_dosen4.dashboard.dosenp');
    }
    public function dosenk()
    {
        return view('menu.super_dosen4.dashboard.dosenk');
    }
    public function gugusk()
    {
        return view('menu.super_dosen4.dashboard.gugusk');
    }
}
