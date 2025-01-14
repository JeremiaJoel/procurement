<?php

use App\Livewire\SelectRole;
use App\Http\Livewire\CreateUser;
use App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SuperAdminController;
use App\Livewire\CreateUser as LivewireCreateUser;
use App\Livewire\SelectRole as LivewireSelectRole;

use Livewire\Livewire;

Route::middleware(['guest'])->group(function () {
    // Route for login page
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    // Route for login process
    Route::post('/login', [LoginController::class, 'login'])->name('login.process');
});

Route::middleware(['auth', UserAkses::class])->group(function () {
    // Route for dashboard super admin
    Route::get('/dashboard-super-admin', [RoleController::class, 'super_admin'])->name('dashboard-super-admin');

    // Route for dashboard admin
    Route::get('/dashboard-admin', [RoleController::class, 'admin'])->name('dashboard-admin');

    // Route for dashboard staff
    Route::get('/dashboard-staff', [RoleController::class, 'staff'])->name('dashboard-staff');
});

//Route ke menu signup dan select role
Route::get('/signup', [LoginController::class, 'toSignUp'])->name('signup.menu');
Route::get('/select-role', [LoginController::class, 'toSelectRole'])->name('selectrole.menu');

// Route for logout
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    //Route punya Super Admin
    Route::get('/manajemen-user', [SuperAdminController::class, 'toManajemenUser'])->name('menuManajemenUser');
    Route::get('/dashboard-buyer', [SuperAdminController::class, 'toDashboard'])->name('backto.Dashboard');
});

Route::get('/create-user', LivewireCreateUser::class)->name('livewire.create-user');
Route::get('/select-a-role', LivewireSelectRole::class)->name('livewire.select-role');

// Default route
Route::get('/', function () {
    return view('login');
});
