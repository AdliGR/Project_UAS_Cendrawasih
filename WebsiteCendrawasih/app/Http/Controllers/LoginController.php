<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // validasi login form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //autentikasi user
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Auth::attempt($credentials)) 
        {
            // jika sukses masuk ke admindashboard
            return redirect()->intended('/AdminDashboard');
        } 
        else 
        {
            // jika gagal
            return redirect()->route('login')->with('error', 'Email/Password salah atau bukan Admin');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
