<?php

use Illuminate\Support\Facades\Route; 

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::post('/login/custom', 'LoginController@login')->name('login.custom');

//Admin Module Route
Route::get('admin/index', 'AdminController@index')->name('admin.index');

// Route::get('/home', 'HomeController@index')->name('home');

// Logout Route
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Patient Module Route
Route::get('/Patient/Index','PatientController@index')->name('patient.index');
Route::get('/Patient/Appointment','PatientController@appointment')->name('patient.appointment');
//Get Doctor Details
Route::get('/Patient/DoctorDetails/13','PatientController@doctorDetails')->name('patient.doctorDetails');
//Active Doctor List
Route::get('/Patient/ActiveDoctors','PatientController@activeDoctors')->name('patient.activeDoctors');
