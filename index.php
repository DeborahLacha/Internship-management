<?php 
$msg = "";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TEACHING A PHP</title>
	<link rel="icon" type="image/jpg" href="Image/php.jpg">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
<div class="">   
	<center> <h2><i class="fa-solid fa-laptop-code"></i>  THIS WEB PAGE IS TO TEACH A PHP </h2> </center> <hr>
</div>
<div class="login">
<h3><i class="fa-solid fa-users"></i> LOGIN </h3> <hr>
<form method="POST" action="login1.php">
<table cellspacing="10" cellpadding="10">
	<tr> <td class="left"> <i class="fa-solid fa-user key"></i> </td>  
		<td> <input type="text" name="username" class="form-control" placeholder="username" required></td>  </tr>
	<tr> <td class="left"> <i class="fa-solid fa-key key"></i> </td> 
	     <td> <input type="password" name="password" class="form-control" placeholder="Password" required></td>  </tr>
	<tr> <td> </td> <td> <button class="btn btn-primary" name="login"> <i class="fa fa-sign-in m-r-5 m-l-5"> </i>  Sign In</button>
	                     <a href="signup.php" class="btn btn-secondary"><i class="fa-solid fa-user-plus"></i>  Sign Up </a> </td></tr>
</table>
</form>
</div>
<center> <?php  echo $msg; ?> </center>
</body>
</html>