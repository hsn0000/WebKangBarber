<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auths.login')->with('sukses','Akun anda berhasil di registrasi');
    }

    public function loginAdmin()
    {
        return view('dashboard.index');
    }

    public function register()
    {
        return view('Auths.register')->with('sukses','Akun anda berhasil di registrasi');
    }

    public function logout()
    {
        return view('Auths.login');
    }
}
