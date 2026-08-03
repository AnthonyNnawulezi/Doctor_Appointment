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
    Route::get('doctor-listings', [DoctorController::class, 'loadDoctors'])->name('doctor.recent-appointments');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin-dashboard', [AdminController::class, 'loadAdminDashboard'])->middleware('admin')->name('admin.dashboard');
    Route::get('recent-appointments', [AdminController::class, 'loadAppointments'])->middleware('admin')->name('admin.dashboard');
});

require __DIR__ . '/auth.php';
