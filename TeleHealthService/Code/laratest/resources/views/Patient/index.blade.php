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
                    </div>
                </div>
                <br/>
                <!-- Update Personal Informations Button -->
                <div class="row">
                  <div class="col-sm-12">
                    <center>
                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updatePersonalInformations">Update Personal Informations</button>
                    </center>
                  </div>
                </div>
            </div>

            <!-- medicalInfo -->
            <div id="medicalInfo" class="container tab-pane"><br>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-info"><center>Blood Presure</center></div>
                        <div class="card-body"><center><strong>120</strong></center></div>
                      </div>
                    </div>
                    
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-success"><center>Pulse</center></div>
                        <div class="card-body"><center><strong>120/180</strong></center></div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-primary"><center>Height</center></div>
                        <div class="card-body"><center><strong>5.7"</strong></center></div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-warning"><center>Weight</center></div>
                        <div class="card-body"><center><strong>80 KG</strong></center></div>
                      </div>
                    </div>
                  </div>

                  <br/>

                  <div class="row">
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-info"><center>Blood Group</center></div>
                        <div class="card-body"><center><strong>B(+)ve</strong></center></div>
                      </div>
                    </div>
                    
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-success"><center>Tempareture</center></div>
                        <div class="card-body"><center><strong>120/180</strong></center></div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-primary"><center>Heart</center></div>
                        <div class="card-body"><center><strong>5.7"</strong></center></div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-warning"><center>Lung</center></div>
                        <div class="card-body"><center><strong>80 KG</strong></center></div>
                      </div>
                    </div>
                  </div>

                  <br/>

                  <div class="row">
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-info"><center>BSA/BMI</center></div>
                        <div class="card-body"><center><strong>120</strong></center></div>
                      </div>
                    </div>
                    
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-success"><center>Food Alergy(If Any)</center></div>
                        <div class="card-body"><center><strong>120/180</strong></center></div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-primary"><center>Drug Alergy(If Any)</center></div>
                        <div class="card-body"><center><strong>5.7"</strong></center></div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-header alert alert-warning"><center>Others(If Any)</center></div>
                        <div class="card-body"><center><strong>80 KG</strong></center></div>
                      </div>
                    </div>
                  </div>

                  <br/>
                  <!-- Update Medical Informations Button -->
                  <div class="row">
                    <div class="col-sm-12">
                      <center>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updateMedicalInformations">Update Medical Informations</button>
                      </center>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </div>

  <!-- Update Personal Informations MODAL -->
	<div class="modal fade" id="updatePersonalInformations" tabindex="-1" role="dialog" aria-labelledby="updatePersonalInformations" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="updatePersonalInformations"> <center> Update Personal Informations </center> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">

        <label>Age</label>
        <input type="number" class="form-control" name="age" id="age">

        <label>Gender</label>
        <select class="form-control">
          <option>Male</option>
          <option>Female</option>
        </select>

        <label>Contact No</label>
        <input type="number" class="form-control" name="contactNo" id="contactNo">

        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email">

        <label>Address</label>
        <textarea class="form-control" name="address" id="address"></textarea>
			</div>
			<div class="modal-footer">
				<form method="post" action="#">
					<input type="hidden" name="packageId" id="packageId" value="">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
					 <button type="submit" class="btn btn-info">Update</button> 
				</form>
			</div>
			</div>
    </div>
    

    <!-- Update Medical Informations MODAL -->
	<div class="modal fade" id="updateMedicalInformations" tabindex="-1" role="dialog" aria-labelledby="updateMedicalInformations" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="updateMedicalInformations"> <center> Update Medical Informations </center> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            <label>Blood Presure</label>
            <input type="text" name="bloodPresure" class="form-control">
          </div>
          <div class="col-sm-4">
            <label>Blood Presure</label>
            <input type="text" name="bloodPresure" class="form-control">
          </div>
          <div class="col-sm-4">
            <label>Blood Presure</label>
            <input type="text" name="bloodPresure" class="form-control">
          </div>
        </div>
			</div>
			<div class="modal-footer">
				<form method="post" action="#">
					<input type="hidden" name="packageId" id="packageId" value="">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
					 <button type="submit" class="btn btn-info">Update</button> 
				</form>
			</div>
			</div>
		</div>
@endsection