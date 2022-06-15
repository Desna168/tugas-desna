<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back();
    }

    public function register()
    {
        return view('register');
    }

    public function simpanuser(Request $request)
    {
        $DataLogin = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:4'
        ]);

        $DataLogin['password'] = Hash::make($DataLogin['password']);

        user::create($DataLogin);

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
