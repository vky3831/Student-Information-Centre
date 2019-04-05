<?php
session_start();
  if($_SESSION['reg']){}
    else{
      header('location: login_as_student.php');
    }

$connection = mysqli_connect('localhost','root', '', 'sic');
$reg = $_SESSION['reg'];
$query = "SELECT * FROM student WHERE reg='$reg' ";
$exe = mysqli_query($connection, $query);
while($rows=mysqli_fetch_array($exe)){
  $name = $rows['name'];
  $roll = $rows['roll'];
  $reg = $rows['reg'];
  $address = $rows['address'];
  $contact = $rows['contact'];
  $email = $rows['email'];
  $gender = $rows['gender'];
  $dept = $rows['dept'];
  $dob = $rows['dob'];
  $age = $rows['age'];
  $batch = $rows['batch'];
  $blood = $rows['blood'];
  $hobby = $rows['hobby'];
  $sec_ques = $rows['sec_ques'];
  $sec_ans = $rows['sec_ans'];
}


 ?>

<!DOCTYPE html>
<html>
<head>
<title> SIC: Student </title>
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
	<li><a href="login.php">Login</a></li>
	<li><a href="signup.php">Sign up</a></li>
	<li><a href="about.php">About</a></li>
  <li class="right"><a href="logout_stud.php">Log Out</a></li>
  <li class="right" style="background-color: #006CFF"><a href="#"><?php echo $name; ?></a></li>
</ul>
</div>
<div class="main">
  <div class="side main2">

  <button class="side_button" style="background-color: #006CFF"> <a href="#"> Personal Details </a></button><br>
  <a href="update_stud.php"><button class="side_button">  Update </button><br></a>
  <!-- <a href="feedback.php"> <button class="side_button">  Feedback </button></a><br>
  <a href="sem_reg.php"> <button class="side_button">  Semester Registration </button></a><br>
	<a href="result.php"> <button class="side_button">  Semester Result </button></a><br>
  <a href="fee.php"> <button class="side_button">  Fee Payment </button></a><br> -->

  </div>
  <div class="article main2">
    <!-- <img class="passport" src="image/a.jpg"/> -->
		<p class="field">Name: <span class="fill"><?php echo $name; ?></span></p>
    <p class="field">Roll no.: <span class="fill"><?php echo $roll; ?></span></p>
    <p class="field">Registration no.: <span class="fill"><?php echo $reg; ?></span></p>
    <p class="field">Address: <span class="fill"><?php echo $address ?></span></p>
    <p class="field">Contact no.: <span class="fill"><?php echo $contact; ?></span></p>
    <p class="field">E-mail Id: <span class="fill"><?php echo $email; ?></span></p>
    <p class="field">Gender: <span class="fill"><?php echo $gender; ?></span></p>
    <p class="field">Department: <span class="fill"><?php echo $dept; ?></span></p>
    <p class="field">Date of Birth: <span class="fill"><?php echo $dob; ?></span></p>
    <p class="field">Age: <span class="fill"><?php echo $age; ?></span></p>
    <p class="field">Batch: <span class="fill"><?php echo $batch; ?></span></p>
    <p class="field">Blood Group: <span class="fill"><?php echo $blood; ?></span></p>
    <p class="field">Hobby: <span class="fill"><?php echo $hobby; ?></span></p>
    <p class="field">Security Question: <span class="fill"><?php echo $sec_ques; ?></span></p>
    <p class="field">Security Answer: <span class="fill"><?php echo $sec_ans; ?></span></p>
  </div>
</div>

</div>
</body>
</html>
