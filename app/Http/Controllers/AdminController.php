<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $user = User::where('role', 'siswa')->get();
        $officer = User::where('role', 'officer')->get();
        return view('admin.dashboard', compact('user', 'officer'));
    }
}
