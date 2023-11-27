<?php
session_start();
include 'connection.php';
$msg = "";
?>

<?php
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
    
    $pwd = md5($password);

  $query = "SELECT * FROM users WHERE Email = '$username' AND password = '$pwd'";
   $query1 = "SELECT uid,name,groups FROM students WHERE uid = '$password' ";
      $result = $con->query($query);
       $result1 = $con->query($query1);

      while($row = mysqli_fetch_array($result)){
      	     $id = $row['Email'];
      	     $status = $row['password'];
      	     $role = $row['role'];
      	     $usename = $row['name'];
      }
      while($row1 = mysqli_fetch_array($result1)){
             $name = $row1['name'];
             $uid = $row1['uid'];
             $group = $row1['groups'];
             
      }

   $_SESSION['username'] = $username;
   //$_SESSION['username'] = $name;

  $row = mysqli_num_rows($result);
  $row1 = mysqli_num_rows($result1);
 if($row>0 || $row1>0){
 	if($role == 'halafi'){
        if($status == 0){
          $msg = "Sorry, You are deactivated!";
        }else{
          header("Location:ECOTEZerf.php");
        }
 	}

 	else if ($role == 'supervisor'){
        if($status == 0){
          $msg = "Sorry, You are deactivated!";
          header("Location:index.php");
        }else{
          header("Location:SupervisorPage.php");
        }
 	}

    else if ($role == 'Director'){
        if($status == 0){

          $msg = "Sorry, You are deactivated!";
          header("Location:index.php");
        }else{
          header("Location:employee.php");
        }
 	}

    
      else if ($name == $username){
        if($uid == 0){

          $msg = "Sorry, You are deactivated!";
          header("Location:index.php");
        }else{
          header("Location:Student.php");
        }
  }


 }else {

 	     $msg =  "Username or password incorrect";
 	 	header("Location:index.php");
 }


}
?>
