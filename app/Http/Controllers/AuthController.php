<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //

    //
    public function admin()
    {
        $user = User::where('role', 'siswa')->get();
        $officer = User::where('role', 'officer')->get();
        return view('admin.dashboard', compact('user', 'officer'));
    }

    public function login(Request $request)
    {
        return view('login.login');
    }

    public function auth(Request $request)
{
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        if (Auth::user()->role == 'admin') {
            return redirect()->intended(route('admin'))->with('success', 'Selamat datang, Admin!');
        } elseif (Auth::user()->role == 'operator') {
            return redirect()->intended(route('operator'))->with('success', 'Selamat datang, Officer!');
        } else {
            return redirect()->back()->with('error', 'Level pengguna tidak valid.');
        }
    }

    return redirect()->back()->with('error', 'Username atau Password salah.');
}

public function logout()
{
    Auth::logout();

    return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
}
}
