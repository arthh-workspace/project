<?php

namespace App\Http\Controllers\Super_dosen1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperD1Controller extends Controller
{
    public function dosenp()
    {
        return view('super_dosen1.dashboard.dosenp');
    }
    public function dosenk()
    {
        return view('super_dosen1.dashboard.dosenk');
    }
}
