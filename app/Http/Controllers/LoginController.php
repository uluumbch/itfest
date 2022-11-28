<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $validasiData = $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username harus diisi',
                'password.required' => 'Password harus diisi',
            ]
        );
        if (auth()->attempt($validasiData)) {
            $request->session()->regenerate();
            return redirect()->intended(route('halamanAdmin'));
        }
        return back()->with('error', 'username atau Password salah');
    }

    // create logout function
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
}