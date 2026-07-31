<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'patient'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('doctor-dashboard', [DoctorController::class, 'loadDoctorDashboard'])->middleware('doctor')->name('doctor.dashboard');

Route::get('admin-dashboard', [AdminController::class, 'loadAdminDashboard'])->middleware('admin')->name('admin.dashboard');

require __DIR__ . '/auth.php';
