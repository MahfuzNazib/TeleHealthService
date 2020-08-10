@extends('layouts.patient')
@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="card-header alert alert-info">
                <h5>
                    <center>
                        Dr.Nazib Mahfuz's Details
                    </center>
                </h5>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card-body">
                    <strong>Doctor Basic Info</strong>
                    <br/>
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>Nazib Mahfuz</td> 
                        </tr>

                        <tr>
                            <td>Degree's</td>
                            <td>MMBS,FCPSC,DMC</td> 
                        </tr>

                        <tr>
                            <td>Visiting Fee</td>
                            <td>600</td> 
                        </tr>

                        <tr>
                            <td>Report Show Fee</td>
                            <td>300</td> 
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card-body">
                    <strong>Booked Patient's Info</strong>
                    <table class="table">
                        <tr>
                            <td>Date</td>
                            <td>2020-07-15</td>
                        </tr>

                        <tr>
                            <td>Morning Shift 
                                <text class="badge badge-primary">Available</text> 
                            </td>
                            <td>19</td>
                        </tr>

                        <tr>
                            <td>Evening Shift
                                <text class="badge badge-danger">Not Available</text>
                            </td>
                            <td>24</td>
                        </tr>

                        <tr>
                            <td>
                                <select class="form-control" name="booking">
                                    <option selected disabled>Select Your Shift</option>
                                    <option>Morning</option>
                                    <option>Evening</option>
                                </select>
                            </td>

                            <td>
                                <input type="submit" class="btn btn-primary" value="Booking">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection