<?php
if(isset($_POST["submit"])){
	$user = $_POST["user"];
	$password = md5($_POST["password"]);
	$sec_ques = $_POST["sec_ques"];
	$sec_ans = $_POST["sec_ans"];

	$connection = mysqli_connect('localhost','root', '', 'sic');
	$query = "SELECT * FROM admin WHERE user='$user' AND sec_ques='$sec_ques' AND sec_ans='$sec_ans' ";
	$exe = mysqli_query($connection ,$query);
	if(mysqli_fetch_assoc($exe)){
		$query = "UPDATE admin SET password='$password' WHERE user='$user' ";
		$exe = mysqli_query($connection ,$query);
		if($exe){
		echo "<script>alert('Password Changed')</script>";
		echo "<script>window.open('login_as_admin.php', '_self')</script>";
	}
		else{
			$err = mysqli_error($connection);
			echo $err;
		}
	}
	else{
		echo "<script>alert('Wrong Creditals')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title> SIC: Password Recovery </title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" href="decoration.css">
</head>
<body>
<div class="container-fluid">
<img id="img" src="image/icon.png" alt="google"/>
<p class="head">STUDENT INFORMATION CENTER</p>
<div class="row">
<ul>
	<li><a href="home.php" >Home</a></li>
	<li><a href="login.php" >Login</a></li>
	<li><a href="signup.php">Sign up</a></li>
	<li><a href="about.php">About</a></li>
  <li><a href="forgot2.php" style="background-color: #006CFF">Password Recovery</a></li>
</ul>
</div>
<div class="main">
<div class="click_forgot">
	<div class="box">
  <form class="form-inline" action="forgot2.php" method="POST">

		<label for="user">Username:</label><br>
    <input type="text" id="user" name="user" placeholder="Enter Username" onfocusout="validate_user()" required><br>
		<p class="alert" id="alert_user">*Enter Username</p>

    <label for="sec_ques">Security Question: </label><br>
    <select name="sec_ques" id="sec_ques">
      <option value="fav_author">Which is favourite author?</option>
      <option value="fav_color">Which is favourite   color?</option>
      <option value="fav_char">Which is favourite character?</option>
      <option value="pet_name">What is your Pet's name?</option>
      <option value="fav_fruit">Which is favourite fruit?</option>
    </select> <br>
    <input type="password" name="sec_ans" id="sec"placeholder="answer security question" size="43" onfocusout="validate_sec()" required>
    <p class="alert" id="alert_sec">*Answer the security question</p>


	<label for="password">New Password: </label><br>
  <input type="password" id="password" name="password" placeholder="Enter New password" size="43" onfocusout="validate_pass()" required><br>
  <p class="alert" id="alert_pass">*Enter password</p>
  <p class="alert" id="alert_lower">*Your password should contain atleast one lowercase letter</p>
  <p class="alert" id="alert_upper">*Your password should contain atleast one uppercase letter</p>
  <p class="alert" id="alert_num">*Your password should contain atleast one numerical value</p>
  <p class="alert" id="alert_special">*Your password should contain atleast one spe.cial character</p>
  <p class="alert" id="alert_len">*Your password length should be more than or equal to 8</p>

  <label for="cnf_password">Confirm Password: </label><br>
  <input type="password" id="cnf_password" name="cnf_password" placeholder="Re-Enter password" size="43" onkeyup="validate_pass()" required><br>
  <p class="alert" id="alert_cnf_pass">*Password and Confirm Password not matching</p>
  <button type="submit" style=" margin-left: 125px; width: 100px;" name="submit">Submit</button>
</form>
</div>


</div>
</div>

</div>

<script type="text/javascript" src="form.js"></script>
</body>
</html>
