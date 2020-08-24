<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Patient Index</title>
  @include('links.usersLink')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user-nurse"></i>
          </div>
        <div class="sidebar-brand-text mx-3">Patient Home</div><br>
        <hr>

      </a>

      <!-- Profile -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('patient.index') }}">
          <i class="fas fa-user-nurse"></i>
          <span>My Profile</span></a>
      </li>

      <!-- Appointment -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('patient.appointment') }}">
          <i class="fas fa-user-friends"></i>
          <span>Appointment</span></a>
      </li>

      <!-- Active Doctor's List -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('patient.activeDoctors') }}">
          <i class="fas fa-user-nurse"></i>
          <span>Active Doctor's List</span></a>
      </li>

      <!-- All Doctors List -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-user-friends"></i>
          <span>All Doctor's List</span></a>
      </li>

      <!-- Servicing Time -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-user-friends"></i>
          <span>Service Time</span></a>
      </li>

      <!-- Video Call -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-user-friends"></i>
          <span>ZOOM Video Call</span></a>
      </li>

      <!-- Patient History -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-user-friends"></i>
          <span>History</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">99+</span>
              </a>
              <!-- Dropdown - NOTIFICATIONS -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notifications
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>


                  </div>
                </a>
                <a class="dropdown-item text-center small text-black-500" href="#">Show All Notification</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <!-- Print Username and Image -->
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nazib Mahfuz</span>
                  <img class="img-profile rounded-circle" src="">
              
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <!-- Go to My Profile  -->
              <a class="dropdown-item" href="/">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                
                <a class="dropdown-item" href="/">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

        @yield('content')

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/userStyle/vendor/jquery/jquery.min.js"></script>
  <script src="/userStyle/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/userStyle/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/userStyle/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/userStyle/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/userStyle/js/demo/chart-area-demo.js"></script>
  <script src="/userStyle/js/demo/chart-pie-demo.js"></script>

</body>

</html>
