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

Route::group(['middleware' => "doctor"], function () {
    Route::get('doctor-dashboard', [DoctorController::class, 'loadDoctorDashboard'])->name('doctor.dashboard');
    Route::get('all-doctors', [DoctorController::class, 'loadDoctors'])->name('doctor.doctor-listings');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin-dashboard', [AdminController::class, 'loadAdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/doctors', [AdminController::class, 'loadAppointments'])->name('admin.doctor-listings');
    Route::get('/admin/doctor/create', [AdminController::class, 'doctorCreate'])->name('admin.create-doctor');
    Route::get('/admin/specialities', [AdminController::class, 'loadSpecialities'])->name('admin.specialites');
});

require __DIR__ . '/auth.php';
