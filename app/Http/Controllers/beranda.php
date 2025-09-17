<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class beranda extends Controller
{
    //

    public function index() {
        return view('beranda.beranda');
    }
}
