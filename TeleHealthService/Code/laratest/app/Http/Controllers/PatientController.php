<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        return view('Patient.index');
    }

    public function appointment(){
        return view('Patient.Appointment');
    }

    //Doctor Details 
    public function doctorDetails(){
        return view('Patient.DoctorDetails');
    }

    //Active Doctors List

    public function activeDoctors(){
        return view('Patient.ActiveDoctors');
    }
}
