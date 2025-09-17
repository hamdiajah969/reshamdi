<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //

    //
    public function login(Request $request)
    {
        if (Auth::check()){
            $user = Auth::user();
            if ($user->role ==='admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'operator'){
                return redirect()->route('operator.dashboard');
            }

        }

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
        } elseif (Auth::user()->role == 'officer') {
            return redirect()->intended(route('officer'))->with('success', 'Selamat datang, Officer!');
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
