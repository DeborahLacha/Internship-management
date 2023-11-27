<?php
session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>

<!DOCTYPE html>
<html>
<head>
	<title> EDITING STUDENTS DATA</title>
  <link rel="stylesheet" type="text/css" href="regcss.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">

</head>
<body>
  <div class="registration">

  <?php
   $id = $_GET['edit'];
   $sql = "SELECT * FROM student WHERE stud_id = $id";
   $result = $con->query($sql);
   while($row = mysqli_fetch_object($result)){
 		$name = $row->name;
 		$Email = $row->email;
 		$Username = $row->username;
 		$status = $row->status;
   }
   ?>
   <h2><center>Edit detail of <?php echo $name;  ?></center>  </h2> <hr>
  <form method="POST" action="">
  <table border="0" cellspacing="5" cellpadding="10" width="98%" style="margin:2px;">
  <tr>
  <td> Name </td>
  <td> <input type="text" name="name" value="<?php echo $name;  ?>" required> </td> </tr>
  <td> Email </td>
  <td> <input type="email" name="email" value="<?php echo $Email;  ?>"required> </td> </tr>
  <td> username </td>
  <td> <input type="text" name="username" value="<?php echo $Username;  ?>" required> </td></tr>
  <td> </td> <td> <button class="btn btn-primary" name="edit"> SAVE CHANGES</button> </td>
  </tr>
  </table>
  </form>
  </div>
</body>
</html>
<?php
// TO EDIT THE VALUE OF THE SELECTED STUDENT
if(isset($_POST['edit'])){
     $n = $_POST['name'];
     $em = $_POST['email'];
     $un = $_POST['username'];
  $sql = "UPDATE student SET name = '$n', email='$em', username='$un' WHERE stud_id=$id";
  $res = $con->query($sql);
  header("location:register.php");
}
 ?>
