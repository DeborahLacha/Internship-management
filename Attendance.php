<?php
session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>
<?php
if(isset($_POST['sub'])){
  $name = $_POST['name'];
  $status = $_POST['status'];
  $group= $_POST['group'];
  $week = $_POST['week'];
$date = $_POST['date'];
$cn = $_POST['cn'];
$sn = $_POST['sn'];
  $name1 = $_POST['name1'];
  $status1 = $_POST['status1'];
  $group1= $_POST['group1'];
  $week1 = $_POST['week1'];
$date1 = $_POST['date1'];
$cn1 = $_POST['cn'];
$sn1 = $_POST['sn'];

  $name2 = $_POST['name2'];
  $status2 = $_POST['status2'];
  $group2= $_POST['group2'];
  $week2 = $_POST['week2'];
$date2 = $_POST['date2'];
$cn2 = $_POST['cn'];
$sn2 = $_POST['sn'];

  $name3 = $_POST['name3'];
  $status3 = $_POST['status3'];
  $group3= $_POST['group3'];
  $week3 = $_POST['week3'];
$date3 = $_POST['date3'];
$cn3 = $_POST['cn'];
$sn3 = $_POST['sn'];

  $name4 = $_POST['name4'];
  $status4 = $_POST['status4'];
  $group4= $_POST['group4'];
  $week4 = $_POST['week4'];
$date4 = $_POST['date4'];
$cn4 = $_POST['cn'];
$sn4 = $_POST['sn'];


          
           
  $query = "INSERT INTO attendance(`Name`,`Status`,`Groups`,`Wenumber`,`Date`,`Cname`,`Sname`) VALUES
                          ('$name','$status','$group','$week','$date','$cn','$sn'), ('$name1','$status1','$group1','$week1','$date1','$cn','$sn'), ('$name2','$status2','$group2','$week2','$date2','$cn','$sn'), ('$name3','$status3','$group3','$week3','$date3','$cn','$sn'), ('$name4','$status4','$group4','$week4','$date4','$cn','$sn')";
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
  <title>Attendances</title>
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
            <a class="nav-link" href="SupervisorPage.php">
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
                  <h4 class="font-weight-bold mb-0">Supervisor Dashboard</h4>
                </div>
                <div>
                    
                </div>
              </div>
            </div>
          </div>
          <form method="POST">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Daily Attendances</h4>
                <form method="POST">
                <div class="input-group-prepend">
                                           Group Name: <input type="text" name="g">
                                           Company Name: <input type="text" name="cn">
                                            Supervisor Name: <input type="text" name="sn">
       
          <button type="submit" class="btn btn-primary mr-2" name="view">View</button>

           <?php
                  if(isset($_POST['view'])){
                $groups= $_POST['g'];
                $sql5 = "SELECT `name` FROM `students` WHERE `groups`='$groups'";
                $wh = $con->query($sql5); 
                while($roow = mysqli_fetch_array($wh)):;
                	 $res[] =  $roow['name'];
                         
                endwhile;
            }
                // While loop must be terminated
            ?>
                
           

                    </div>

                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                   
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Name
                        </th>
                        
                        <th>
                          Status
                        </th>
                      
                          <th>
                            Group
                          </th>
                          <th>
                            Week Number
                          </th>
                          <th>
                            Date
                          </th>
                          
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                        <input type="text" name="name" value=" <?php echo $res[0]; ?>">
                        </td>
                        <td>
                            <div class="form-group">
              
            <select class="form-control btn-primary" id="exampleFormControlSelect2" name="status">
                <option disabled="select">Select</option>
                <option>Peresent</option>
                <option>Absent</option>
              
              </select>

            </div>
                        </td>
                        <td>
                  <div class="form-group">
              
               <input type="text" name="group">
            </div>
                        </td>
                        <td>
                                        <div class="form-group">
              
               <input type="text" name="week">
            </div>
                        </td>
                        <td>
                                       <div class="form-group">
              
               <input type="date" name="date">
            </div>
                        </td>
                
                        
                        
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                         <input type="text" name="name1" value=" <?php echo $res[1]; ?>">
                        </td>
                        <td>
                                        <div class="form-group">
              
              <select class="form-control btn-primary" id="exampleFormControlSelect2" name="status1">
                <option disabled="select">Select</option>
                <option>Peresent</option>
                <option>Absent</option>
              
              </select>
            </div>
                        </td>
                        <td>
                                       <div class="form-group">
              
               <input type="text" name="group1">
            </div>
                        </td>
                        <td>
                                      <div class="form-group">
              
               <input type="text" name="week1">            </div>
                        </td>
                        <td>
                                      <div class="form-group">
              
             <input type="date" name="date1">
            </div>
                        </td>
                    
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        <td>
                        <input type="text" name="name2" value=" <?php echo $res[2]; ?>">
                        </td>
                        <td>
                                        <div class="form-group">
              
              <select class="form-control btn-primary" id="exampleFormControlSelect2" name="status2">
                <option disabled="select">Select</option>
                <option>Peresent</option>
                <option>Absent</option>
              
              </select>
            </div>
                        </td>
                        <td>
                                       <div class="form-group">
              
               <input type="text" name="group2">
            </div>
                        </td>
                        <td>
                                        <div class="form-group">
              
             <input type="text" name="week2">
            </div>
                        </td>
                        <td>
                                        <div class="form-group">
              
             <input type="date" name="date2">
            </div>
                        </td>
               
           

                      </tr>
                      <tr>
                        <td>
                          4
                        </td>
                        <td>
                       <input type="text" name="name3" value=" <?php echo $res[3]; ?>">
                        </td>
                        <td>
                                      <div class="form-group">
              
              <select class="form-control btn-primary" id="exampleFormControlSelect2" name="status3">
                <option disabled="select">Select</option>
                <option>Peresent</option>
                <option>Absent</option>
              
              </select>
            </div>
                        </td>
                        <td>
                                       <div class="form-group">
              
             <input type="text" name="group3">
            </div>
                        </td>
                        <td>
                                       <div class="form-group">
              
              <input type="text" name="week3">
            </div>
                        </td>
                        <td>
                                      <div class="form-group">
              
             <input type="date" name="date3">
            </div>
                        </td>
                
                      </tr>
                      <tr>
                        <td>
                          5
                        </td>
                        <td>
                      <input type="text" name="name4" value=" <?php echo $res[4]; ?>">
                        </td>
                        <td>
                                       <div class="form-group">
              
              <select class="form-control btn-primary" id="exampleFormControlSelect2" name="status4">
                <option disabled="select">Select</option>
                <option>Peresent</option>
                <option>Absent</option>
              
              </select>
            </div>
                        </td>
                        <td>
                                       <div class="form-group">
              
               <input type="text" name="group4">
            </div>
                        </td>
                        <td>
                                        <div class="form-group">
              
            <input type="text" name="week4">
            </div>
                        </td>
                        <td>
                                      <div class="form-group">
              
            <input type="date" name="date4">
            </div>
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

