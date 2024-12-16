<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Menampilkan form login
    }

    public function login(Request $request)
    {
        // Logika untuk proses login, misalnya menggunakan Auth::attempt()
    }
}
