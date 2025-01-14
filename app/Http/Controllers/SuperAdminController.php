<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{


    //Fungsi navigasi menu Super Admin
    public function toManajemenUser()
    {
        return view('super_admin.manajemen-user-super-admin');
    }

    public function toDashboard()
    {
        return view('super_admin.dashboard-super-admin');
    }
}
