<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loadAdminDashboard()
    {
        return view('admin.dashboard');
    }
    public function loadAppointments()
    {
        return view('admin.recent-appointments');
    }
}
