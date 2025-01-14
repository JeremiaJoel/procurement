<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {

        // Untuk validasi email dan password harus diisi
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi!',
            'password.required' => 'Password invalid'
        ]);

        $loginInfo = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        //Membedakan dashboard user berdasarkan role
        if (Auth::attempt($loginInfo)) {
            if (Auth::user()->super_admin == '1') {
                return redirect('/dashboard-super-admin');
            } else if (Auth::user()->admin == '1') {
                return redirect('/dashboard-admin');
            } else if (Auth::user()->staff == '1') {
                return redirect('dashboard-staff');
            }
        } else {
            // Jika kredensial salah, kembalikan ke login dengan error
            return redirect()->route('login')->withErrors([
                'password' => 'Email dan password tidak sesuai.' // Simpan di 'email' agar mudah ditampilkan
            ])->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function toSelectRole()
    {
        return view('selectRole');
    }

    public function toSignUp()
    {
        return view('signup');
    }
}
