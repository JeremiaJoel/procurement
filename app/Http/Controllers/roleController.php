<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class roleController extends Controller
{
    public function roleList()
    {
        // List role
        $user = Auth::user();
        $roles = [];

        if ($user->super_admin == '1') {
            $roles[] = 'super_admin';
        } else if ($user->admin == '1') {
            $roles[] = 'admin';
        } else if ($user->staff == '1') {
            $roles[] = 'staff';
        }
    }

    public function groupRole(Request $request)
    {
    
        $request->validate(['role' => 'required']);
        
        $role = $request->role;

        if (Auth::user()->{$role} == '1') {
            switch ($role) {
                case 'super_admin':
                    return redirect()->route('dashboard-super-admin');
                case 'admin':
                    return redirect()->route('dashboard-admin');
                case 'staff':
                    return redirect()->route('dashboard-staff');
            }
        }

        return back()->withErrors(['role' => 'Anda tidak memiliki akses ke role ini.']);
    }

    public function super_admin()
    {
        if (Auth::check()) {
            return view('super_admin.dashboard-super-admin');
        }
        return redirect('/login');
    }

    public function admin()
    {
        if (Auth::check()) {
            return view('admin.dashboard-admin');
        }
        return redirect('/login');
    }

    public function staff()
    {
        if (Auth::check()) {
            return view('staff.dashboard-staff');
        }
    }
}
