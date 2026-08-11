<?php

namespace App\Http\Controllers;

use App\Models\Speciality;

class AdminController extends Controller
{
    public function loadAdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function loadAppointments()
    {
        return view('admin.doctor-listings');
    }

    public function doctorCreate()
    {
        return view('admin.doctor-create');
    }

    public function loadSpecialities()
    {
        return view('admin.specialities');
    }

    public function loadSpecialityForm()
    {
        return view('admin.speciality-create');
    }

    public function editSpeciality(int $speciality_id)
    {
        $speciality = Speciality::findOrFail($speciality_id);
        return view('admin.edit-speciality', compact('speciality'));
    }
}
