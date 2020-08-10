<style>
    .btnEdit{
        height: 40px;
        width: 100%;
        background-color: rgb(7, 134, 134);
        border-radius: 5px;
        cursor: pointer;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
        transition-duration: 0.5s;
    }
    .btnEdit:hover{
        background-color: rgb(1, 54, 54);
        border-radius: 7px;
        font-size: large;
        transition-duration: 0.5s;
    }
</style>

@extends('layouts.patient')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <center>
        <h4>My Profile</h4>
      </center>
    </div>
  </div>
  <div class="row">
  <div class="card-body">
        <div class="table">
            <div class="row">
            <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#myProfile">Personal Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#medicalInfo">Medical Information</a>
                </li>
            </ul>
        <!--Tab Panes-->
        <div class="tab-content">
            <!-- My Profile -->
            <div id="myProfile" class="container tab-pane active"><br>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="container bg card">
                        
                        <table width="100%" class="table table-hover">
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
                                <td>Contact</td>
                                <td>01777127618</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>nazibmahfuz60@gmail.com</td>
                            </tr>

                            <tr>
                                <td>Address</td>
                                <td>kdnvjkdgfnbkjgn</td>
                            </tr>
                        </table>
                        
                        </div>
                    </div>
                    <!-- //Profile Picture -->
                    <div class="col-sm-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Profile Picture</h6>
                            </div>
                            <div class="card-body">
                            
                                <center>
                                    <img class="rounded-circle z-depth-2" height="200px" width="200px" src="/img/doctor/doctor_1.png">
                                </center>
                            </div>
                        </div>
                        <div>
                            <a href="#">
                                <input type="submit" value="Edit Profile" class="btnEdit">
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- medicalInfo -->
            <div id="medicalInfo" class="container tab-pane"><br>
                <center><h5>Medical Information</h5></center>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <table>
                        <tr>
                            <td> 
                                Blood Presure 
                                <input type="text" disabled class="form-control" value="5.7"> 
                            </td>

                            <td> 
                                Pulse 
                                <input type="text" disabled class="form-control" value="80 KG"> 
                            </td>

                            <td> 
                                Height 
                                <input type="text" disabled class="form-control" value="80 KG"> 
                            </td>
                        </tr>

                        <tr>
                            <td> 
                                Weight 
                                <input type="text" disabled class="form-control" value="5.7"> 
                            </td>

                            <td> 
                                Blood Group 
                                <input type="text" disabled class="form-control" value="80 KG"> 
                            </td>

                            <td> 
                                Temparature 
                                <input type="text" disabled class="form-control" value="80 KG"> 
                            </td>
                        </tr>

                        <tr>
                            <td> 
                                Heart 
                                <input type="text" disabled class="form-control" value="5.7"> 
                            </td>

                            <td> 
                                Lung 
                                <input type="text" disabled class="form-control" value="80 KG"> 
                            </td>

                            <td> 
                                BSA/BMI 
                                <input type="text" disabled class="form-control" value="80 KG"> 
                            </td>
                        </tr>

                        <tr>
                            <td> 
                                Food Alergy(If Any) 
                                <input type="text" disabled class="form-control" value="5.7"> 
                            </td>

                            <td> 
                                Drug Alergy(If Any) 
                                <input type="text" disabled class="form-control" value="80 KG"> 
                            </td>

                            <td> 
                                Others(If Any) 
                                <input type="text" disabled class="form-control" value="80 KG"> 
                            </td>
                        </tr>
                    </table>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection