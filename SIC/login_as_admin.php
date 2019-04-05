<?php

session_start();
if(isset($_SESSION['user'])){
	header('location: admin.php');
}

if(isset($_POST["submit"])){
	$user = $_POST["user"];
	$password = md5($_POST["password"]);

	$connection = mysqli_connect('localhost','root', '', 'sic');
	$query = "SELECT * FROM admin WHERE user='$user' AND password='$password' ";
	$exe = mysqli_query($connection ,$query);
	if(mysqli_fetch_assoc($exe)){
		$_SESSION['user'] = $user;
		header('location: admin.php');
		// echo "<script>window.open('admin.php?user=$user', '_self')</script>";
	}
	else{
	echo "<div class='error'> Wrong Creditals</div>";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
<title> SIC: Login as Admin </title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" href="decoration.css">
<style media="screen">
.error{
	width: 1300px;
	text-align:center;
	padding: 10px;
	border: 1px solid #E70F0F;
	border-radius: 5px;
	color: #E70F0F;
	background-color: #FFC9C9;
	font-size: 20px;
	margin-top: 0px;

}
</style>
</head>
<body>
<div class="container-fluid">
<img id="img" src="image/icon.png" alt="google"/>
<p class="head">STUDENT INFORMATION CENTER</p>
<div class="row">
<ul>
	<li><a href="home.php" >Home</a></li>
	<li><a href="login.php" style="background-color: #006CFF">Login</a></li>
	<li><a href="signup.php">Sign up</a></li>
	<li><a href="about.php">About</a></li>
</ul>
</div>
<div class="main">
<div class="click">
	<div class="box">
  <form class="form-inline" action="login_as_admin.php" method="post">
  <label for="username">Username(Admin):</label><br>
  <input type="text" id="username" placeholder="Enter username" name="user" size="43" required><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" placeholder="Enter password" name="password" size="43" required><br>
	<a href="forgot2.php"><span style="color:white; font-size:15px; text-decoration: underline; float: right;">forgot password?</span></a><br>
  <label>
    <input type="checkbox" name="remember"> Remember me
  </label><br>
  <button type="submit" style=" margin-left: 125px; width: 100px;" name="submit">Submit</button>
</form>
</div>
<p>Switch to <a href="login_as_student.php">Student</a></p>

</div>
</div>

</div>


</body>
</html>
