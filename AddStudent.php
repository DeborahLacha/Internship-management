<?php

include 'connection.php';
//echo "Connected, and database selected!"
?>

<?php
if(isset($_POST['add'])){
  $group = $_POST['group'];
  $sDate = $_POST['sDate'];
  $eDate= $_POST['eDate'];
  $name= $_POST['name'];
  $ins= $_POST['ins'];
  $sex= $_POST['sex'];
  

  $query = "INSERT INTO students(`name`,`sex`,`institution`,`startDate`,`endDate`,`groups`) VALUES('$name','$sex','$ins','$sDate','$eDate','$group')";
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
  <title>Add Students List</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/SNNPR BoSIT.jpg" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel w-100  documentation">
        <div class="content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 doc-header">
                <a class="btn btn-success" href="../Supervisor Page.html"><i class="mdi mdi-home mr-2"></i>Back to home</a>
                <h3 class="text-primary mt-4">Add Students List</h3>
              </div>
            </div>
            <div class="row doc-content">
              <div class="col-12 col-md-10 offset-md-1">
                <div class="col-12 grid-margin" id="doc-intro">
                    <div class="card">
                        <div class="card-body">
                <h2 class="card-title">Add Students List</h2>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Group Name:</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="group" />
                                    </div>
                                  </div>
                                  </div>
                              
                        
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Start Date:</label>
                              <div class="col-sm-9">
                                <input type="date" class="form-control" name="sDate" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">End Date:</label>
                              <div class="col-sm-9">
                                <input type="date" class="form-control" name="eDate" />
                              </div>
                            </div>
                          </div>
                          </div>
                <h2 class="card-title">Students List</h2>
                

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name:</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="name" />
                                </div>
                              </div>
                            </div>
                            
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Institution:</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="ins" />
                                    </div>
                                  </div>
                                </div>

                                
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <div class="col-sm-9">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Sex:</label>
                                      <select class="form-control" id="exampleFormControlSelect2" name="sex">
                                        <option>Male</option>
                                        <option>Female</option>
                                        
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                    </div>
                <button type="submit" class="btn-success" name="add">Add</button>
              </form>
                </div>
                
                
        <!-- partial:../partials/_footer.html -->

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © SNNPR BoSIT 2022 . All rights reserved.</span>
            
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
  </div>
<!-- plugins:js -->
<script src="../vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="../js/off-canvas.js"></script>
<script src="../js/hoverable-collapse.js"></script>
<script src="../js/template.js"></script>
<script src="../js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../js/documentation.js"></script> 
<!-- End custom js for this page-->
</body>

</html>