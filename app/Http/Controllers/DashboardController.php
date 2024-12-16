<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Cek role dan arahkan ke view yang sesuai
        if ($user->hasRole('admin')) {
            return view('dashboard.admin');
        } elseif ($user->hasRole('petugas')) {
            return view('dashboard.petugas');
        } elseif ($user->hasRole('instansi')) {
            return view('dashboard.instansi');
        }

        // Jika tidak ada role yang cocok, arahkan ke view default
        return view('dashboard');
    }
}
