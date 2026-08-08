<?php

namespace App\Http\Controllers;

use App\Models\Specialities;
use Illuminate\Http\Request;

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

    public function editSpeciality($speciality_id)
    {
        return view('admin.edit-speciality', compact('speciality_id'));
    }

    public function deleteSpeciality(Specialities $speciality, Request $request)
    {
        $speciality->delete($request);
        session()->flash('message', 'Speciality deleted successfully');

        return redirect('/admin/specialities');
    }
}
