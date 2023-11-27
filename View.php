<?php
session_start();
include 'connection.php';
include 'login1.php';


$msg = "";

$username  = $_SESSION['username'];


$sql = "SELECT * FROM students WHERE name = '$username'  ";
$result = $con->query($sql);
while($row = mysqli_fetch_array($result)){

             $id = $row['uid'];
             $start = $row['startDate'];
             $end = $row['endDate'];
           }

$sql1 = "SELECT * FROM gp WHERE s_uid = '$id'  ";
$result1 = $con->query($sql1);
while($row1 = mysqli_fetch_array($result1)){

             $att = $row1['attendance'];
             $pun = $row1['punctuality'];
             $rel = $row1['reliability'];
             $ind = $row1['independence'];
             $rep = $row1['report'];
             $tot = $row1['total'];
           }



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>View Results</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/SNNPR BoSIT.jpg" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="Student Home.html"><h5>Student Dashboard</h5></a>
        <a class="navbar-brand brand-logo-mini" href="Student Home.html"><img src="images/SNNPR BoSIT.jpg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
    
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="Student Home.html">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="View Result.html">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">View Result</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="Reports.html">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0"><?php echo  $username ?></h4>
                </div>
                <div>
                    
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Your Results</h2>
                
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            General Performance(25%)
                          </th>
                          <th>
                            Attendance(5%)
                          </th>
                          <th>
                            Punctuality(5%)
                          </th>
                          <th>
                            Reliability(5%)
                          </th>
                          <th>
                            Independence in Work(5%)
                          </th>
                          <th>
                           Monthly Reporting Performance(5%)
                          </th>
                          <th>
                          Total(25%)
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            
                          </td>
                          <td>
                              <?php echo  $att ?>
                          </td>
                          <td>
                             <?php echo  $pun ?>
                          </td>
                          <td>
                             <?php echo  $rel ?>
                          </td>
                          <td>
                             <?php echo  $ind ?>
                          </td>
                          <td>
                             <?php echo  $rep ?>
                          </td>
                          <td>
                             <?php echo  $tot ?>
                          </td>
                          
                          
                        </tr>
                        <tr>
                          <th>
                            Personal Skills (25%)
                          </th>
                          <th>
                            Accuracy(5%)
                          </th>
                          <th>
                            Engagement(5%)
                          </th>
                          <th>
                            Communication Skills(5%)
                          </th>
                          <th>
                            Coopration with Colleagues(5%)
                          </th>
                          <th>
                           Relating practical with the theoretical skills(5%)
                          </th>
                          <th>
                          Total(25%)
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            
                          </td>
                          <td>
                             
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            
                          </td>
                          
                          
                        </tr>
                        <tr>
                          <th>
                            Professional Skills(50%)
                          </th>
                          <th>
                            Technical Skills(10%)
                          </th>
                          <th>
                            Organizational Skills(5%)
                          </th>
                          <th>
                            Support of the project tasks(15%)
                          </th>
                          <th>
                            Responsibility in task Fulfillment(15%)
                          </th>
                          <th>
                           Professionalism Ethics(5%)
                          </th>
                          <th>
                          Total(50%)
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            
                          </td>
                          <td>
                             
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            
                          </td>
                          <td>
                            
                          </td>
                          
                          
                        </tr>
                        <thead><tr><th>Total Result(100%)</th><th><th><th><th><th><th></th></th></th></th></th></th></tr></thead>
                        
  
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © SNNPR BoSIT 2022. All rights reserved.</span>
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

