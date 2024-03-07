<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('ekspor-kelapa.register');
    }

    public function register(Request $request)
    {
        // Implementasi logika registrasi
        // Contoh: Menyimpan data user ke database

        return redirect()->route('ekspor-kelapa.dashboard');
    }
}
