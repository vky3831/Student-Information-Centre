<?php
session_start();
if(isset($_SESSION['reg'])){
	header('location: student.php');
}

if(isset($_POST["submit"])){
	$reg = $_POST["reg"];
	$password = md5($_POST["password"]);
	$connection = mysqli_connect('localhost','root', '', 'sic');
	$query = "SELECT * FROM student WHERE reg='$reg' AND password='$password' ";
	$exe = mysqli_query($connection ,$query);

	if(mysqli_fetch_assoc($exe)){
		$exe = mysqli_query($connection ,$query);
		$rows=mysqli_fetch_assoc($exe);
		$status = $rows['status'];
		if($status == 1){
			$exe = mysqli_query($connection ,$query);
			$rows=mysqli_fetch_assoc($exe);
			$reg = $rows['reg'];
			// session_start();
			$_SESSION['reg'] = $reg;
			header('location: student.php');
			// echo "<script>window.open('student.php?reg=$reg', '_self')</script>";
		}

		elseif ($status == 0) {
			echo "<div class='error'> Your request is pending. Try again after sometime.</div>";
		}
		else {
			echo "<div class='error'> Your request has been rejected. Contact Admin.</div>";
		}
	}
	else{
		echo "<div class='error'> Wrong Creditals</div>";
	}

}

 ?>
<!DOCTYPE html>
<html>
<head>
<title> SIC: Login as Student </title>
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
	  <form class="form-inline" action="login_as_student.php" method="post">
	  <label for="username">Username(Student):</label><br>
	  <input type="text" id="username" placeholder="Enter reg. no." name="reg" size="43" required><br>
	  <label for="pwd">Password:</label><br>
	  <input type="password" id="pwd" placeholder="Enter password" name="password" size="43" required><br>
		<a href="forgot.php"><span style="color:white; font-size:15px; text-decoration: underline; float: right;">forgot password?</span></a><br>
	  <label>
	    <input type="checkbox" name="remember"> Remember me
	  </label><br>
	  <button type="submit" style=" margin-left: 125px; width: 100px;" name="submit">Submit</button>
	</form>
	</div>
	<p>Switch to <a href="login_as_admin.php">Admin</a></p>

	</div>
</div>

</div>
</body>
</html>
