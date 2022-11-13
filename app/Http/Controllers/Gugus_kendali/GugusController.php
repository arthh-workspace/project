<?php

namespace App\Http\Controllers\Gugus_kendali;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GugusController extends Controller
{
    public function index()
    {
        return view('menu.gugus_kendali.dashboard.index');
    }
}
