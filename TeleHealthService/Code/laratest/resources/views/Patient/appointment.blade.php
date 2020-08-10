@extends('layouts.patient')
@section('content')

    <div class="container">
        <div class="card-header alert alert-info">
            <center><h5>Make My Appointment</h5></center>
        </div>

        <!-- Body Content -->
        <div class="card-body">
            <!-- Selection Content -->
            <div class="row">
                <!-- Department -->
                <div class="col-sm-3">
                    <label>Select Department</label>
                    <select class="form-control" name="department">
                        <option selected disabled>Select Department</option>
                        <option>Neaurology</option>
                        <option>Cardiology</option>
                        <option>Eye</option>
                        <option>Dental</option>
                    </select>
                </div>
                <!-- Appointment Date -->
                <div class="col-sm-3">
                    <label>Appointment Date</label>
                    <input type="date" class="form-control" name="appointmentDate">
                </div>
                <!-- Preferred Doctor -->
                <div class="col-sm-3">
                    <label>Select Doctor</label>
                    <select class="form-control" name="doctorName">
                        <option selected disabled>Select Preffered Doctor</option>
                        <option>Dr.Nazib Mahfuz</option>
                        <option>Dr.Maidul Islam</option>
                        <option>Dr.Farzana</option>
                        <option>Dr.Rohan</option>
                    </select>
                </div>
                <!-- Button -->
                <div class="col-sm-3">
                    <br/>
                    <center>
                        <input type="submit" class="btn btn-primary" value="Search Appointment">                    
                    </center>
                </div>
            </div>
            <!-- End Selection Content Row -->
            <br/>
            <!-- Show Avalibale Doctor List -->
            <div class="row">
                <div class="col-sm-12">
                    <center><h4>Available Doctor List</h4></center>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>DrName</th>
                                <th>Dept</th>
                                <th>Patient(s)</th>
                                <th>Details</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Dr.Nazib Mahfuz</td>
                                <td>Neorology</td>
                                <td>6</td>
                                <td>
                                    <a href="{{ route('patient.doctorDetails') }}">
                                        <input type="submit" class="btn btn-info" value="Details">
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>Dr.Nazib Mahfuz</td>
                                <td>Neorology</td>
                                <td>6</td>
                                <td>
                                    <input type="submit" class="btn btn-info" value="Details">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection