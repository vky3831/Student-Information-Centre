<?php
session_start();
  if($_SESSION['user']){}
    else{
      header('location: login_as_admin.php');
    }
$connection = mysqli_connect('localhost','root', '', 'sic');
$user = $_GET['user'];
$query = "SELECT * FROM admin WHERE user='$user' ";
$exe = mysqli_query($connection, $query);
while($rows=mysqli_fetch_array($exe)){
  $user = $rows['user'];
}

 ?>

 <?php

 if(isset($_POST	["register"])){
 $name = $_POST["name"];
 $new_user = $_POST["user"];
 $contact = $_POST["contact"];
 $email = $_POST["email"];
 $password = md5($_POST["password"]);
 $gender = $_POST["gender"];
 $sec_ques =  $_POST["sec_ques"];
 $sec_ans = $_POST["sec_ans"];

 $connection = mysqli_connect('localhost', 'root', '', 'sic');

 $query = "INSERT INTO admin(name, user,contact, email, gender, password, sec_ques, sec_ans)
 					VALUES( '$name', '$new_user','$contact', '$email', '$gender','$password','$sec_ques', '$sec_ans')";
 $exe = mysqli_query($connection, $query);
 if($exe){
 	echo "<div id='success'> Registration completed <a href='new_admin.php?user=$user'><button id='x1'>x</button></a></div>";
 	// echo "<script type='text/javascript'>alert('Registration completed');</script>";

 } else{
 	$err = mysqli_error($connection);
 	echo  "<div id='error'>$err<a href='new_admin.php?user=$user'><button id='x2'>x</button></a></div>";
 	// echo "<script type='text/javascript'>alert(\"$err\");</script>";
 }

 }
  ?>

<!DOCTYPE html>
<html>
<head>
<title> SIC: New Admin </title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" href="decoration.css">
<style>
  input{
    padding: 10px;
    margin-bottom: 5px;
    margin-top: 5px;
  }
  label{
    font-size: 2vw;
  }
  button {
    padding: 10px 20px;
    background-color: dodgerblue;
    border: 1px solid #ddd;
    color: white;
    cursor: pointer;
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
	<li><a href="login.php">Login</a></li>
	<li><a href="signup.php">Sign up</a></li>
	<li><a href="about.php">About</a></li>
  <li class="right"><a href="logout.php">Log Out</a></li>
  <li class="right" style="background-color: #006CFF"><a href="#"><?php echo $user; ?></a></li>
</ul>
</div>
<div class="main">
  <div class="side main2">
  <a href="admin.php?user=<?php echo $user; ?>"><button class="side_button">  Personal Details </button></a><br>
  <a href="database.php?user=<?php echo $user; ?>"><button class="side_button">  Database </button></a><br>
  <!-- <button class="side_button"> <a href="pending.php?user=<?php echo $user; ?>"> Pending </a></button><br>
  <button class="side_button"> <a href="rejected.php?user=<?php echo $user; ?>"> Rejected </a></button><br> -->
  <button class="side_button" style="background-color: #006CFF"> <a href="#"> New Admin </a></button><br>
  </div>
  <div class="article main2">
    <form action="new_admin.php?user=<?php echo $user; ?>" onsubmit="return validate_form()" method="post">
      <div class="box2">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" placeholder="Enter name" size="50" onfocusout="validate_name()" required><br>
      <p class="alert" id="alert_name">*Enter name</p>

      <label for="user">Username:</label><br>
      <input type="text" id="user" name="user" placeholder="Enter Username" onfocusout="validate_user()" required><br>
  		<p class="alert" id="alert_user">*Enter Username</p>

      <label for="contact" >Contact no.: </label><br>
      <input type="number" id="contact" name="contact" placeholder="Enter contact no." onfocusout="validate_contact()" required><br>
      <p class="alert" id="alert_contact">*Enter Contact no.</p>
      <p class="alert" id="alert_contact_invalid">*Invalid Contact no.</p>

      <label for="email">E-mail: </label><br>
      <input type="email" id="email" name="email" placeholder="Enter e-mail id" size="60" onfocusout="validate_email()" required> <br>
      <p class="alert" id="alert_email">*Enter E-mail ID</p>

      <label for="password">Password: </label><br>
      <input type="password" id="password" name="password" placeholder="Enter password" onfocusout="validate_pass()" required><br>
      <p class="alert" id="alert_pass">*Enter password</p>
      <p class="alert" id="alert_lower">*Your password should contain atleast one lowercase letter</p>
      <p class="alert" id="alert_upper">*Your password should contain atleast one uppercase letter</p>
      <p class="alert" id="alert_num">*Your password should contain atleast one numerical value</p>
      <p class="alert" id="alert_special">*Your password should contain atleast one spe.cial character</p>
      <p class="alert" id="alert_len">*Your password length should be more than or equal to 8</p>

      <label for="cnf_password">Confirm Password: </label><br>
      <input type="password" id="cnf_password" name="cnf_password" placeholder="Confirm password" onkeyup="validate_pass()" required><br>
      <p class="alert" id="alert_cnf_pass">*Password and Confirm Password not matching</p>


      <label for="gender">Gender: </label><br>
      <input type="radio" name="gender" id="gender" value="M" style="width:10px" checked>Male
      <input type="radio" name="gender" id="gender" value="F" style="width:10px">Female <br>

      <label for="sec_ques">Security Question: </label><br>
      <select name="sec_ques" id="sec_ques">
        <option value="fav_author">Which is favourite author?</option>
        <option value="fav_color">Which is favourite color?</option>
        <option value="fav_char">Which is favourite character?</option>
        <option value="pet_name">What is your Pet's name?</option>
        <option value="fav_fruit">Which is favourite fruit?</option>
      </select> <br>
      <input type="text" name="sec_ans" id="sec"placeholder="answer security question" onfocusout="validate_sec()" required>
      <p class="alert" id="alert_sec">*Answer the security question</p>
    </div>
      <div class="buttons">
      <button type="submit" name="register">Register</button>
      <button type="reset">Reset</button>
    </div>
    </form>


  </div>
</div>

</div>
<script type="text/javascript" src="form.js"></script>
</body>
</html>
