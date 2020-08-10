@extends('layouts.patient')
@section('content')
    <div class="container bg card">
        <div class="row">
            <div class="col-sm-12">
                <br/>
                <div class="card-header alert alert-primary">
                    <h4>
                        <center>Active Doctors List</center>
                    </h4>
                </div>
                <br>
                <!-- Sorting Doctors By Dept -->
                <div class="row">
                    <div class="col-sm-5">
                        <select class="form-control" name="department">
                            <option selected disabled>Select Departments</option>
                            <option>All</option>
                            <option>Neaurology</option>
                            <option>Cardiology</option>
                            <option>ENT</option>
                            <option>Dental</option>
                        </select>
                    </div>

                    <div class="col-sm-2">
                        <center>Or</center>
                    </div>

                    <!-- Searching Doctor -->
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="search" placeholder="Search by Name or Phone">
                    </div>
                </div>
            </div>
        </div>

        <br/>
        <hr/>
        <!-- Doctors Table -->

        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <a href="{{route('patient.doctorDetails')}}">
                                    Nazib Mahfuz
                                </a>
                            </td>
                            <td>Denatl</td>
                            <td>01777127618</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                        </tr>

                        <tr>
                            <td>ABC</td>
                            <td>Denatl</td>
                            <td>01967979441</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection