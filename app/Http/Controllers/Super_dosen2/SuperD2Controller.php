<?php

namespace App\Http\Controllers\Super_dosen2;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperD2Controller extends Controller
{
    public function dosenp()
    {
        return view('menu.super_dosen2.dashboard.dosenp');
    }
    public function gugusk()
    {
        return view('menu.super_dosen2.dashboard.gugusk');
    }
}
