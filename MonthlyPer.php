<?php
session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>

<?php
if(isset($_POST['sub'])){
  $name = $_POST['name'];
  $cname = $_POST['cName'];
  $sname= $_POST['spName'];
  $month= $_POST['month'];
  $att= $_POST['attend'];
  $punc= $_POST['punc'];
  $rel= $_POST['relia'];
  $ind= $_POST['inde'];
    $rep= $_POST['rep'];
      $tot= $_POST['tot'];
        $acc= $_POST['acc'];
          $eng= $_POST['engage'];
            $com= $_POST['com'];
            $cop= $_POST['cop'];
            $rell= $_POST['rel'];
            $tott= $_POST['tott'];
            $tech= $_POST['tech'];
            $org= $_POST['org'];
            $sup= $_POST['sup'];
            $resp= $_POST['res'];
            $eth= $_POST['ethic'];
            $total= $_POST['total'];
            

            
            
  

$sql2 = "SELECT `uid` FROM `students` WHERE `name`='$name'";
    $ress = $con->query($sql2);
    $row = $ress->fetch_assoc();
    $id= $row["uid"];
    
  $query = "INSERT IGNORE INTO header(`student`,`company`,`supervisor`,`month`,`s_uid`) VALUES('$name','$cname','$sname','$month','$id')";
  $que = "INSERT IGNORE INTO gp(`attendance`,`punctuality`,`reliability`,`independence`,`report`,`total`,`s_uid`) VALUES('$att','$punc','$rel','$ind','$rep','$tot','$id')";
  $qu = "INSERT IGNORE INTO personalskill(`accuracy`,`engagement`,`communication`,`cooperation`,`relating`,`total`,`s_uid`) VALUES('$acc','$eng','$com','$cop','$rell','$tott','$id')";
   $quer = "INSERT IGNORE INTO professionalskill(`technical`,`organizational`,`support`,`responsibility`,`ethics`,`total`,`s_uid`) VALUES('$tech','$org','$sup','$resp','$eth','$total','$id')";


    
    $res = $con->query($query);
     $res1 = $con->query($que);
      $res2 = $con->query($qu);
       $res3 = $con->query($quer);
       $sql = "SELECT `name` FROM `students` ";
       $res4 = $con->query($sql);

    if($res){
      echo "Inserted";
    }else{
      echo "Wrong!";
    }
}
?>*/
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Results</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="style.css">
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
            <a class="nav-link" href="Attendance.php">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Attendances</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="MonthlyPer.php">
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
                <h4 class="card-title">Monthly Performance Evaluation</h4>
                
              <form method="POST">
                <div class="row">
                            Group Name: <input type="text" name="groups">
                            <button class="btn btn-primary" name="find" >SELECT</button>
                          </div>
<br>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-sm-9">
          <div class="form-group">
              <label for="exampleFormControlSelect2">Student Name:</label>
              <select class="form-control" id="exampleFormControlSelect2" name="name">
                <?php
                  if(isset($_POST['find'])){
                $groups= $_POST['groups'];
                $sql5 = "SELECT `name` FROM `students` WHERE `groups`='$groups'";
                $wh = $con->query($sql5); 
                while($roow = mysqli_fetch_array($wh)):;
                
            ?>
                <option><?php
             echo $roow['name'];?></option>
                          <?php
                endwhile;}
                // While loop must be terminated
            ?>

        </select>



            </div>
          </div>
        </div>
      </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <div class="col-sm-9">
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Month:</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="month">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>


     </div>
              
                

                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Supervisor Name:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="spName" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Company Name:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="cName" />
                        </div>
                      </div>
                    </div>
                  </div>
                  




                <div class="table-responsive pt-3">
                  <form name="yes" action="#" method="POST">
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
                           <input type="number" name="attend" id="x1"> 
                        </td>
                        <td>
                           <input type="number" name="punc" id="x2">
                        </td>
                        <td>
                          <input type="number" name="relia" id="x3"> 
                        </td>
                        <td>
                           <input type="number" name="inde" id="x4">
                        </td>
                        <td>
                           <input type="number" name="rep" id="x5">
                        </td>
                        <td>
                          <input type="number" name="tot" id="total1" onclick="caly(this.value)"readonly> 
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
                           <input type="number" name="acc" id="accc" > 
                        </td>
                        <td>
                           <input type="number" name="engage" id="enga">
                        </td>
                        <td>
                           <input type="number" name="com" id="comm">
                        </td>
                        <td>
                           <input type="number" name="cop" id="copp">
                        </td>
                        <td>
                           <input type="number" name="rel" id="rell">
                        </td>
                        <td>
                           <input type="number" name="tott" id="total2" onclick="cal2(this.value)"readonly="">
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
                           <input type="number" name="tech" id="techh" > 
                        </td>
                        <td>
                           <input type="number" name="org" id="orgg">
                        </td>
                        <td>
                           <input type="number" name="sup" id="supp">
                        </td>
                        <td>
                           <input type="number" name="res" id="ressss">
                        </td>
                        <td>
                           <input type="number" name="ethic" id="ethii"> 
                        </td>
                        <td>
                           <input type="number" name="total" id="total3" onclick="cal3(this.value)"readonly> 
                        </td>
                        
                        
                      </tr>
                      <thead><tr><th>Total Result(100%) <input type="text" name="restt" id="ye"onclick="cal(this.value)" readonly></th><th><th><th><th><th><th></th></th></th></th></th></th></tr></thead>
                      
                      
                      
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary mr-2" name="sub">Submit</button>
        </form>
          <button type="submit" class="btn btn-primary mr-2"> Convert to PDF</button>
</form>
<script >
  function caly(){
    if(document.getElementById("x1").value==""){
      var y1=0;
    }else{
      y1=parseFloat(document.getElementById("x1").value)
    }
        if(document.getElementById("x2").value==""){
      var y2=0;
    }else{
      y2=parseFloat(document.getElementById("x2").value)
    }
        if(document.getElementById("x3").value==""){
      var y3=0;
    }else{
      y3=parseFloat(document.getElementById("x3").value)
    }
        if(document.getElementById("x4").value==""){
      var y4=0;
    }else{
      y4=parseFloat(document.getElementById("x4").value)
    }
        if(document.getElementById("x5").value==""){
      var y5=0;
    }else{
      y5=parseFloat(document.getElementById("x5").value)
    }
    var total=y1+y2+y3+y4+y5;
    document.getElementById("total1").value=total;
  }

  function cal2(){
    if(document.getElementById("accc").value==""){
      var y1=0;
    }else{
      y1=parseFloat(document.getElementById("accc").value)
    }
        if(document.getElementById("enga").value==""){
      var y2=0;
    }else{
      y2=parseFloat(document.getElementById("enga").value)
    }
        if(document.getElementById("comm").value==""){
      var y3=0;
    }else{
      y3=parseFloat(document.getElementById("comm").value)
    }
        if(document.getElementById("copp").value==""){
      var y4=0;
    }else{
      y4=parseFloat(document.getElementById("copp").value)
    }
        if(document.getElementById("rell").value==""){
      var y5=0;
    }else{
      y5=parseFloat(document.getElementById("rell").value)
    }
    var total=y1+y2+y3+y4+y5;
    document.getElementById("total2").value=total;
  }
    function cal3(){
    if(document.getElementById("techh").value==""){
      var y1=0;
    }else{
      y1=parseFloat(document.getElementById("techh").value)
    }
        if(document.getElementById("orgg").value==""){
      var y2=0;
    }else{
      y2=parseFloat(document.getElementById("orgg").value)
    }
        if(document.getElementById("supp").value==""){
      var y3=0;
    }else{
      y3=parseFloat(document.getElementById("supp").value)
    }
        if(document.getElementById("ressss").value==""){
      var y4=0;
    }else{
      y4=parseFloat(document.getElementById("ressss").value)
    }
        if(document.getElementById("ethii").value==""){
      var y5=0;
    }else{
      y5=parseFloat(document.getElementById("ethii").value)
    }
    var total=y1+y2+y3+y4+y5;
    document.getElementById("total3").value=total;
  }
      function cal(){
    if(document.getElementById("total1").value==""){
      var y1=0;
    }else{
      y1=parseFloat(document.getElementById("total1").value)
    }
        if(document.getElementById("total2").value==""){
      var y2=0;
    }else{
      y2=parseFloat(document.getElementById("total2").value)
    }
        if(document.getElementById("total3").value==""){
      var y3=0;
    }else{
      y3=parseFloat(document.getElementById("total3").value)
    }

    var total=y1+y2+y3;
    document.getElementById("ye").value=total;
  }
</script>
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
 <!-- <script src="vendors/base/vendor.bundle.base.js"></script>-->
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- <script src="vendors/chart.js/Chart.min.js"></script>-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
   <!--<script src="js/off-canvas.js"></script>-->
   <!--<script src="js/hoverable-collapse.js"></script>-->
  <!-- <script src="js/template.js"></script>-->
  <!-- <script src="js/todolist.js"></script>-->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- <script src="js/dashboard.js"></script>-->
  <!-- End custom js for this page-->
</body>

</html>

