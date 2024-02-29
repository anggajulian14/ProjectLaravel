<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginpage');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Periksa apakah kredensial sesuai dengan yang diinginkan
        if ($username === 'user' && $password === 'password') {
            // Jika cocok, arahkan ke halaman dashboard
            return redirect()->route('dashboard');
        }

        // Jika tidak cocok, arahkan kembali ke halaman login dengan pesan error
        return redirect()->route('dashboard');
    }
}