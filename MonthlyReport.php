<?php
session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>

<?php
if(isset($_POST['sub'])){
  $name = $_POST['month'];
  $email = $_POST['Mtask'];
  $username= $_POST['date'];
  

  $query = "INSERT INTO monthreport(`month`,`Mtasks`,`dates`) VALUES('$name','$email','$username')";
    $res = $con->query($query);
    if($res){
      echo "Inserted";
    }else{
      echo "Wrong!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Monthly Report</title>
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
        <a class="navbar-brand brand-logo mr-5" href="Supervisor Page.html"><h5>Supervisor Dashboard</h5></a>
        <a class="navbar-brand brand-logo-mini" href="Supervisor Page.html"><img src="images/SNNPR BoSIT.jpg" alt="logo"/></a>
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
            <a class="nav-link" href="Supervisor Page.html">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Attendances.html">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Attendances</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Monthly Performance Evaluation.html">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title">Results</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="Weekly Report.html"> Weekly Report </a></li>
                <li class="nav-item"> <a class="nav-link" href="Monthly Report.html"> Monthly Report </a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Attachement.html">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Attachments</span>
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
                    
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Monthly Report</h2>
                
                <div class="table-responsive pt-3">
                	<form method="POST">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        
                        <th>
                          Month
                        </th>
                        <th>
                          Major tasks accomplished in the Month
                        </th>
                        <th>
                          Supervisor sign and date
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        
                        <td>
                         <input type="text" name="month">
                        </td>
                        <td>
                          1.<textarea rows="3" cols="60" name="Mtask"> </textarea>
                        </td>
                        <td>
                          <input type="date" class="form-control" name="date">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          2.<textarea rows="3" cols="60" name="Mtask"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="date">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          3.<textarea rows="3" cols="60" name="Mtask"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="date">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          4.<textarea rows="3" cols="60" name="Mtask"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="date">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          5.<textarea rows="3" cols="60" name="Mtask"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="date">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          6.<textarea rows="3" cols="60" name="Mtask"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="date">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          7.<textarea rows="3" cols="60" name="Mtask"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="date">
                        </td>
                        
                      </tr>
                      
                    </tbody>
                    <tbody>
                      <tr>
                        
                        <td>
                          2nd Month
                        </td>
                        <td>
                          1.<textarea rows="3" cols="60"> </textarea>
                          
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          2.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          3.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          4.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          5.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          6.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          7.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      
                    </tbody>
                    <tbody>
                      <tr>
                        
                        <td>
                          3rd Month
                        </td>
                        <td>
                          1.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          2.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          3.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          4.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          5.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          6.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          7.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      
                    </tbody>
                    <tbody>
                      <tr>
                        
                        <td>
                          4th Month
                        </td>
                        <td>
                          1.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          2.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          3.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          4.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          5.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          6.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                          <input type="text" name="">
                        </td>
                        
                      </tr>
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td>
                          7.<textarea rows="3" cols="60"> </textarea>
                        </td>
                        <td>
                        <input type="text" name="">
                        </td>
                        
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary mr-2" name="sub">Submit</button>

</form>
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

