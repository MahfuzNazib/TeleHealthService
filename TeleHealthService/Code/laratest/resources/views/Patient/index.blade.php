@extends('layouts.patient')
@section('content')

  <div class="row">
        <!-- Basic Infromation DIV -->
        <div class="container bg card">
        <div class="col-sm-8">
          <div class="container">
            <br>
            <strong> Basic Info </strong>

            <table class="table table-hover">
              <tr>
                <td>Full Name</td>
                <td>Nazib Mahfuz</td>
              </tr>

              <tr>
                <td>Age</td>
                <td>24</td>
              </tr>

              <tr>
                <td>Gender</td>
                <td>Male</td>
              </tr>

              <tr>
                <td>Phone No</td>
                <td>01777127618</td>
              </tr>

              <tr>
                <td>Email</td>
                <td>nazibmahfuz60@gmail.com</td>
              </tr>

              <tr>
                <td>Address</td>
                <td>bckjdbvnlnvv</td>
              </tr>
            </table>
            <center>
              <button class="btn btn-primary">Edit Profile</button>
            </center>
            <br/>
          </div>
        </div>
        </div>
        
  </div>

@endsection