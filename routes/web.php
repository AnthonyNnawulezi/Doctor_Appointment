<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'patient'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::group(['middleware' => "doctor"], function () {
    Route::get('doctor-dashboard', [DoctorController::class, 'loadDoctorDashboard'])->name('doctor.dashboard');
    Route::get('recent-appointments', [DoctorController::class, 'loadDoctorDashboard'])->name('doctor.recent-appointments');
});

Route::get('admin-dashboard', [AdminController::class, 'loadAdminDashboard'])->middleware('admin')->name('admin.dashboard');

require __DIR__ . '/auth.php';
